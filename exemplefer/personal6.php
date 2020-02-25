<!DOCTYPE html>
<?php 
/*$persona= array(
    "nom"=>"Ferran",
    "cognom" =>"Serra",
    "edat"=> 28 );*/
$personal= array(
    "1"=>array ("nom"=>"Ferran",
    "cognom" =>"Serra",
    "edat"=> 28 ),
    "2"=>array ("nom"=>"Marc",
    "cognom" =>"Ortega",
    "edat"=> 45 ),
    "3"=>array ("nom"=>"Anna",
    "cognom" =>"Simon",
    "edat"=> 26 )
    
    );      

    //print_r($_SERVER);
    //print_r($_GET);
    //print_r ($_REQUEST);
if( isset ($_REQUEST["id"]) ){ 
    $id = $_REQUEST["id"];
    if(!isset($personal [$id])) {
        $error = "L'id $id no existeix";
    }
    
} else {
    $error = "Cal definir un id";
    
}

 if( isset ($error)){ 
            echo $error;
        } else { 
         include "vistesfer/dades_personals_fer.php";      
        }
        
        
        

