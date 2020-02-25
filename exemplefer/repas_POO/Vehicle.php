<?php
/**
 * Description of Vehicle
 *
 * @author 10912-4
 */
class Vehicle {
    private $combustible;
    private $anyMatriculacio;
    private $potencia;
    
    private $_tipusCombustible = array ("diesel", "gasolina", "electric", "hibrid");


    public function __construct($any=0, $combustible= "", $potencia=0) 
    {
        /*$this->anyMatriculacio= $any;
        $this->combustible= $combustible;
        $this->potencia= $potencia;*/
     if($any > 0)
     $this->setAnyMatriculacio($any);
     else 
     $this->anyMatriculacio = $any;
     
     
     if ( !empty($combustible))
     $this->setCombustible ($combustible);
     else {
         $this->combustible = $combustible;
     }
     
     if ($potencia > 0)
     $this->setPotencia($potencia);
     else
         $this->potencia= $potencia;
    }
    
    public function mostrarValors ()
    {
        echo "L'any de matriculació és:" . $this->anyMatriculacio. "<br>";
        echo "La potència és:" .$this->potencia. "<br>";
        echo "El combustible és " .$this->combustible. "<br>";
    }
    public function setAnyMatriculacio ($any)
    {
        assert(is_numeric($any)&& $any > 0);
        if (!is_numeric($any))
            die ();
        $this->anyMatriculacio=$any;
    }
    
    public function setPotencia ($potencia)  {
            if (!is_numeric($potencia)|| $potencia <0)
            die ("La potència no es correcta");
            $this->potencia=$potencia;
    }
    
    public function setCombustible ($combustible)  
    {
        $combustible = strtolower($combustible); 
        if (in_array($combustible, $this-> _tipusCombustible))
        $this->combustible=$combustible; 
        else
            die("El Combustible $combustible no és correcte");
    }
    public function getAnyMatriculacio ()
    {
        return $this->anyMatriculacio;
    }
    public function getcombustible ()
    {
        return $this->combustibleombustible;
    }
    public function getPotencia ()
    {
        return $this->potencia;
    }       
                        
            
}






