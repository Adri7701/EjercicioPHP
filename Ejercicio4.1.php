<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Flowrecords.css">
</head>
<body>

<form action="Ejercicio4.1.php" method= get>
    <p><input type="number" name="numero" min="1" max="100" autofocus></p>
</form>
<?php

$x=$_GET["numero"];

echo "<h3>Tabla del $x</h3>";

for ($i=1;$i<=10;$i++){
    echo "$x x $i = ".($x*$i)."<br>";
}
?>
    

    
</body>
</html>