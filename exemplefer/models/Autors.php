<?php
include "Persona.php";

class Autors extends Persona
{
    
    public function __construct($connexio)
    {
        parent::__construct($connexio);
        
        $this->_dades['editorial'] = 0;
        $this->_dades['valoracio'] = "";
        $this->_dades['telf_agent'] = "";
    }
    
    public function setDades($dades)
    {
        $this->_dades = $dades;
        if(!isset($this->_dades['valoracio']))
            $this->_dades['valoracio'] = 0;
    }
    
    public function getDades()
    {
        return $this->_dades;
    }
    
    public function seleccionarPerId($id)
    {
        $consulta = "SELECT * FROM autors where id=%d";
        $this->_connexio->consulta($consulta, $id);

        if ($this->_connexio->numFiles() > 0) {
            $this->_dades = $this->_connexio->obtenirFila();
        }
        return $this->_dades;
    }
    
    public function afegirAutor()
    {
        $this->afegirPersona($dades);
        $darrerId  = $this->_connexio->obtenirDarrerId();
        $this->_connexio->consulta("INSERT INTO autor (id, editorial, valoracio, telf_agent)
                 VALUES(%d, '%s', '%s', '%s')",
                $darrerId, $this->_dades['editorial'], $this->_dades['valoracio'], $this->_dades['telf_agent']);
    }
    
    public function actualitzarAutor()
    {
        //TODO:
        // 1er: actualitzar persona
        // 2on: actualitzar autor
    }
    
    public function llistatAutors()
    {
        $llistat = array();
        $consulta = "SELECT * FROM autors LEFT JOIN  persones USING(id) ORDER BY cognoms ASC, nom ASC";
        //var_dump($this->_connexio->consulta($consulta, $num));
        if($this->_connexio->consulta($consulta))
        {
            while($infoAutor = $this->_connexio->obtenirFila())
            {
                $llistat[$infoAutor['id']] = $infoAutor;
            }
        }
        return $llistat;
    }
}
