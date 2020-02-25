<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$nota1=mt_rand(1,10);
$nota2=mt_rand(1,10);
$nota3=mt_rand(1,10);
$resultado=($nota1+$nota2+$nota3)/3;
echo "la nota 1 es $nota1 <br>";
echo "la nota 2 es $nota2 <br>";
echo "la nota 3 es $nota3 <br>";
switch ($resultado) {
case $resultado<= 4: 
    echo"insuficiente";
break;
case $resultado<= 5:
    echo"suficiente";    
break;
case $resultado<= 6:
    echo"bien";  
break;
case $resultado<= 8:
    echo"notable";  
break;
case $resultado<= 9:
    echo"sobresaliente";
}
?>

</body>
</html>