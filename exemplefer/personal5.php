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


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if( isset ($error)){ 
            echo $error;
        } else { ?>
        
        <p>Nom: <?=$personal[$id]["nom"]?></p> 
        <p>Cognom: <?=$personal[$id]["cognom"]?></p> 
        <p>Edat: <?=$personal[$id]["edat"]?></p>  
        
        <?php } ?>
        
    </body>
</html>
 
