<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author marc
 */
class Persona
{
    /**
     *
     * @var Connexio
     */
    protected $_connexio;
    protected $_dades = array();
    
    public function __construct($connexio)
    {
        $this->_connexio = $connexio;
        
        $this->_dades['id'] = 0;
        $this->_dades['nom'] = "";
        $this->_dades['cognoms'] = "";
        $this->_dades['telf'] = "";
        $this->_dades['email'] = "";
        $this->_dades['alias'] = "";
    }
    
    public function seleccionarPerId($id)
    {
        $consulta = "SELECT * FROM persones where id=%d";
        $this->_connexio->consulta($consulta, $id);

        if ($this->_connexio->numFiles() > 0) {
            $this->_dades = $this->_connexio->obtenirFila();
        }
        return $this->_dades;
    }
    
    public function seleccionarPerNom($nom, $cognoms)
    {
        $consulta = "SELECT * FROM persones where nom='$nom' AND cognoms='$cognoms' LIMIT 1";
        $this->_connexio->consulta($consulta);

        if ($this->_connexio->numFiles() > 0) {
            $this->_dades = $this->_connexio->obtenirFila();
        }
        return $this->_dades;
    }
    
    public function afegirPersona($dades)
    {
        $camps = array('nom', 'cognoms', 'telf', 'email', 'alias');
        
        // Verifiquem que tenim els camps necessaris
        foreach( $dades AS $clau => $valor )
        {
            if( !in_array($clau, $camps))
            {
                unset($dades[$clau]);
            }
        }
        
        $consulta = "INSERT INTO persones (nom, cognoms, telf, email, alias)
            VALUES ('" .implode("','", $dades). "')";
        
        $this->_connexio->query($consulta);
        if( $this->_connexio->affected_rows > 0 )
        {
            return true;
        } else {
            print_r($dades);
            return false;
        }
    }
}
