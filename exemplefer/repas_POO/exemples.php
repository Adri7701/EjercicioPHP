<?php

include "Vehicle.php";
include 'Cotxe.php';

$vehicle = new Vehicle(1990, "diesel", 120);
$vehicle2= new Vehicle();
//$vehicle->anyMatriculacio = "hola";
//$vehicle->setAnyMatriculacio("hola");
       

        /*echo "L'any de matriculació és:" . $vehicle->anyMatriculacio. 
        "<br>" /** salt de linia PHp;
echo "La potència és:" . $vehicle->potencia;
 "<br>" /** salt de linia PHp*/
/*echo "L'any de matriculació és:" . $vehicle2->anyMatriculacio. 
        "<br>" /** salt de linia PHp*/
/*echo "La potència és:" . $vehicle2->potencia; */


$vehicle->mostrarValors();
$vehicle2->mostrarValors ();
echo '<br>';
$cotxe =new Cotxe (2017,"Gasolina", 140);
$cotxe->setTipus("familiar");
$cotxe->mostrarValors();



