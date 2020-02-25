<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Flowrecords.css">
</head>
<body>
<h1>Multiplicador</h1>
<form action="Ejercicio4.2.php" method= get>
<p>Numero 1: <input type="number" name="numerox" min="1" max="100" autofocus></p>
<p>Numero 2: <input type="number" name="numeroy" min="1" max="100" autofocus></p>
<input type="submit" name="Enviar">
</form>
<?php

$x=$_GET["numerox"];
$y=$_GET["numeroy"];


echo "<h3>Resultado:</h3>";


    echo "$x x $y =".($x*$y);

?>
    

    
</body>
</html>