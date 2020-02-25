<?php

if( isset($_POST['dades']) && is_array ($_POST['dades']))
{
    $username = "root";
    $password = "";
    $bd= "gd_exemple";
    
    include "class/connexio.php";
    $connexio = new Connexio($username, $password, $bd);
    include 'models/persona.php';
    $persona = new Persona ($connexio);
    $persona->afegirPersona($_POST['dades']);
   
}
include "vistesfer/formulari.php"?>


