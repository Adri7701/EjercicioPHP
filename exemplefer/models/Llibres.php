<?php

class Llibres
{
    /**
     *
     * @var Connexio
     */
    private $_connexio;
    private $_dades = array();
    
    public function __construct($connexio)
    {
        $this->_connexio = $connexio;
        
        $this->_dades['id'] = 0;
        $this->_dades['titol'] = "";
        $this->_dades['subtitol'] = "";
        $this->_dades['editorial'] = "";
        $this->_dades['any_publicacio'] = 0;
        $this->_dades['autor_ref'] = "0";
        $this->_dades['valoracio'] = "0";
        $this->_dades['resum'] = "";
        $this->_dades['preu'] = "0";
        $this->_dades['id_imatge'] = "";
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
        $consulta = "SELECT * FROM llibres where id=%d";
        $this->_connexio->consulta($consulta, $id);

        if ($this->_connexio->numFiles() > 0) {
            $this->_dades = $this->_connexio->obtenirFila();
        }
        return $this->_dades;
    }
    
    public function afegirLlibre()
    {
        $this->_connexio->consulta("INSERT INTO llibres (titol, subtitol, editorial, any_publicacio, preu,
                autor_ref, id_imatge, valoracio, resum)
                 VALUES('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
                $this->_dades['titol'], $this->_dades['subtitol'], $this->_dades['editorial'],
                $this->_dades['any_publicacio'], $this->_dades['preu'], 
                $this->_dades['autor_ref'], $this->_dades['id_imatge'], $this->_dades['valoracio'],
                $this->_dades['resum']);
    }
    
    public function actualitzarLlibre()
    {
        $this->_connexio->consulta("UPDATE llibres SET 
                titol='%s', subtitol='%s', editorial='%s', any_publicacio='%s', preu='%s',
                autor_ref='%s', id_imatge='%s', valoracio='%s', resum='%s' WHERE id='%s'",
                $this->_dades['titol'], $this->_dades['subtitol'], $this->_dades['editorial'],
                $this->_dades['any_publicacio'], $this->_dades['preu'], 
                $this->_dades['autor_ref'], $this->_dades['id_imatge'], $this->_dades['valoracio'],
                $this->_dades['id'], $this->_dades['resum']);
    }
    
    public function llistatDarrers($num=6)
    {
        $llistat = array();
        $consulta = "SELECT * FROM llibres ORDER BY any_publicacio DESC LIMIT %d";
        //var_dump($this->_connexio->consulta($consulta, $num));
        if($this->_connexio->consulta($consulta, $num))
        {
            while($infoLibre = $this->_connexio->obtenirFila())
            {
                $llistat[$infoLibre['id']] = $infoLibre;
            }
        }
        return $llistat;
    }
}
