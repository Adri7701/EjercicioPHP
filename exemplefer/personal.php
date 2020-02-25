<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

$nom="Ferran";
$cognom= "Serra";

        
var_dump($nom); 
print_r($_SERVER);



?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pàgina Personal de <?php            echo "$nom $cognom"?>
        </title>
    </head>
    <body>
        <h1> Pàgina de <?php            echo "$nom $cognom"?></h1>
    </body>
</html>
