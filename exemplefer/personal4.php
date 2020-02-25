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



?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Nom: <?=$personal["1"]["nom"]?></p> 
        <p>Cognom: <?=$personal["1"]["cognom"]?></p> 
        <p>Edat: <?=$personal["1"]["edat"]?></p>  
        
    </body>
