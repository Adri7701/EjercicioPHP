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




if( isset ($_REQUEST["id"]) ){ 
    $id = $_REQUEST["id"];
    
    $consulta = "select * from persones WHERE id=$id";
    $resultat = $conn->query ($consulta);
    if ($resultat->num_rows== 0) {
        $error ="id no existeis";
    }
    $personal= $resultat -> fetch_assoc();
      
} elseif( isset($_REQUEST['user']) ){
    $user = explode("_", $_REQUEST['user']);
    $consulta = "select * from persones " .
            "WHERE nom='{$user[0]}' AND cognoms='{$user[1]}' ";
    $resultat = $conn->query ($consulta);
    if ($resultat->num_rows== 0) {
        $error ="L'usuari no existeix";
    }
    $personal= $resultat -> fetch_assoc();
    
} else {
    $error = "Cal definir un id";
    
}

 if( isset ($error)){ 
            echo $error;
        } else { 
         include "vistesfer/dades_personals_fer.php";      
        }
        
        
        


