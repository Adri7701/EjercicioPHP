<?php

/**
 * Description of connexio
 *
 * @author inst
 */
class connexio {
    /**
     *Connexió a la base de dades
     * @var mysqli
     */
    private $_conn;
    /**
     *Resultats de la consulta
     * @var mysqli_result
     */
    private $_resultats;


    public function __construct($username, $password, $bd, $hostname="localhost"){
            
    // Create connection
    $this ->_conn = new mysqli($hostname, $username, $password, $bd);    

// Check connection
if ($this->_conn->connect_error) {
    die("Connection failed: " . $this->_conn->connect_error);    
    }   
    }
    
    public function consulta($consulta)
    { 
        $llistatParametres = func_get_args();
        
        foreach ($llistatParametres AS $clau => $valor)
        {
            if($clau > 0)
            {
                $llistatParametres [$clau] = $this-> _conn->real_escape_string($valor);
            }
            
        }
        // Cridem a la funció sprintf passant els paràmetres en forma d'array
        $consultaFinal = call_user_func_array("sprintf", $llistatParametres);
               
        //print_r($consulta);exit;
        $this->_resultats = $this->_conn->query($consultaFinal);
        if ( !$this->_resultats ) {
            return false;
        }
        return true;
    }
    
    public function ObtenirFila ()
    {
        $fila= $this->_resultats->fetch_array(MYSQLI_ASSOC); 
        //$this->_resultats->fetch_ASSOC(); 
              
        if(is_null ($fila))
            return false;
        else
            return $fila;
        // return is_null ($fila) ? false : $fila;
    }
    
    public function numFilesAfectades()
    {
        return $this->_conn->affected_rows;
    }
    
    public function  numfiles()
    {
        return$this->_resultats->num_rows;
    }
}

