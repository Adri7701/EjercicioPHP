<!DOCTYPE html>
<?php 
// obrir la connexió

$servername = "localhost";
$username = "root";
$password = "";
$bd= "gd_exemple";

// Create connection
$conn = new mysqli($servername, $username, $password, $bd);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


include "models/persona.php";
// creem l'objecte de la classe Persona
$objecte_persona = new persona ($conn);


if( isset ($_REQUEST["id"]) ){ 
    $id = $_REQUEST["id"];
    
    if(!$objecte_persona->obtenirperid ($id)){
        $error ="id no existeis";
    } else {
        $personal = $objecte_persona -> obtenirdades();
    }
         
} 
elseif( isset($_REQUEST['user']) ){
    $user = explode("_", $_REQUEST['user']);
      if(!$objecte_persona->obtenirperNomCognoms($user[0], $user [1])){
        $error ="id no existeis";
    } else {
        $personal = $objecte_persona -> obtenirdades();
    }  
} 
else {
    $error = "Cal definir un id";   
}

 if( isset ($error)){ 
            echo $error;
        } 
        else { 
         include "vistesfer/dades_personals_fer.php";      
        }
       

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

