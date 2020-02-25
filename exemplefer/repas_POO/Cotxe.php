<?php

class Cotxe extends Vehicle{
    private $tipus;
    private $_tipusCotxe = array("compacte", "familiar", "suv");
    public function setTipus ($tipus)             
    {
    $tipus = strtolower ($tipus);
    if(in_array ($tipus, $this->_tipusCotxe))
            $this-> tipus = $tipus;
    else
        die ("El tipus de cotxe no és correcte");
}
    
public function getTipus ()
{
return $this-> tipus;
}
public function mostrarValors() 
{
parent::mostrarVAlors();
echo 'El tipus és: ' . $this->tipus. "<br>";

}
}
