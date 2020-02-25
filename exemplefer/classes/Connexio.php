

<?php


/**
 * Description of Connexio
 *
 * @author profe-81781
 */
class Connexio {
    /**
     *
     * @var mysqli
     */
    private $_conn;
    
    /**
     *
     * @var mysqli_result
     */
    private $_resultat;
    
    public function __construct($username, $password, $bd, $hostname="localhost") {
        // Create connection
        $this->_conn = new mysqli($hostname, $username, $password, $bd);
        // Check connection
        if ($this->_conn->connect_error) {
            die("Connection failed: " . $this->_conn->connect_error);
        } 
    }
    
    /**
     * No es necessari ja que al finalitzar l'script es tanquen les connexions obertes
     */
    public function disconnect()
    {   
        $this->_conn->close();
    }
    
    public function consulta($consulta)
    {
        assert( $this->_conn instanceof mysqli );
        // creamos un array con los campos que nos pasan
        $listadoParametros = func_get_args();
        
        if (count($listadoParametros) > 1)
        {
            // a lot of times only query and no extra parameter will be given, so sanization is not required
            // esta funcion genera de forma dinamica una llamada a 'bind_param' con todos los valores que
            // hayamos pasado en $listadoValores. Por ejemplo:
            // 		sprintf("consulta %d", campo1)
            // o
            // 		sprintf("consulta %d %u", campo1, campo2)
            foreach ($listadoParametros as $indice => $parametroConcreto)
            {
                // index 0 is the query itself. Not necessary to sanitize but we will need it later
                if ($indice > 0)
                    $listadoParametros[$indice] = $this->sanejar($parametroConcreto);
            }       
            $consulta = call_user_func_array('sprintf', $listadoParametros);
        }
        
        // Eliminem %% que hem utilitzat per no confondre a sprintf
        $consulta = str_replace("%%", "%", $consulta);
        $this->_resultat = $this->_conn->query($consulta);
        if( !$this->_resultat)
        {
            $this->_mostrarError();
            return false;
        }

        return $this->_resultat;
        
        
    }
    
    public function sanejar($dada)
    {
        // CAMBIO: No añadimos los % porque en algunos casos no queremos que se conviertan en %% ya que a veces
    	// pasamos como parametro de la consulta algo que incluye codigos para sprintf. Ej:
    	//		$consulta = "SELECT DATE_FORMAT(fecha, '%s') ..."
    	//		$con->consulta($consulta, "%d/%m");
    	// % symbol may do a sprintf call to crash. We add 2 %% as this is the right way to pass a % symbol
    	// to sprintf
        return $this->_conn->real_escape_string(str_replace("%", "%%", $dada));
    }
    
    private function _mostrarError()
    {
        echo "ErrorBD (ID:{$this->_conn->errno}): {$this->_conn->error}\n {$this->_conn->info}";
    }
    
    public function obtenirFila()
    {
        $infoElemento = $this->_resultat->fetch_array(MYSQLI_ASSOC);
        
        return !is_null($infoElemento)?$infoElemento:false;
    }
    
    public function numFiles()
    {
        return ($this->_resultat instanceof mysqli_result) ? $this->_resultat->num_rows : false;
    }
    
    public function numAfectades()
    {
        return $this->_conn->affected_rows;
    }
    
    public function obtenirTotesFiles()
    {   
        // Posem l'objecte Resultats en la primera posició
        $this->_resultat->data_seek(0);
        $listado = array();
        while ($infoElemento = $this->obtenirFila())
        {
            $listado[] = $infoElemento;
        }
        // resetejem la posició
        $this->_resultat->data_seek(0);
        return $listado;
    }
    public function obtenirDarrerId()
    {
        // Retorna l'id del darrer element inserit
        return $this->_conn->insert_id;
    }
}
