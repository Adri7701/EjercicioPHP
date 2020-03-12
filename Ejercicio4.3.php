<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Flowrecords.css">
</head>
<body>
<h1>Calculador de iva y irpf</h1>
<form action="Ejercicio4.3.php" method= get>
<p>Numero 1: <input type="number" name="numero" min="1" max="100" autofocus></p>
</form>
<?php

$x=$_GET["numero"];
$irpf=$x*1.15;
$iva=$x*1.21;
$total=($x+$iva)-$irpf;

    echo "Resultado: $total" ;





?>
    

    
</body>
</html>