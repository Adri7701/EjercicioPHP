<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Estilos3.5.css">
</head>
<body>

<form action="Ejercicio3.5.php" method= $_GET>
    
<?php  
$x=mt_rand(1,10);
for ($tabla=$x;$tabla<=$x;$tabla++){
    echo "<h3>Tabla del $tabla</h3>";
}

for ($i=1;$i<=10;$i++){
    echo "$tabla x $i =".($tabla*$i)."<br>";

}
?>
    

    
</body>
</html>