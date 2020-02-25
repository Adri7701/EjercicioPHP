<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$hora=mt_rand(1,24);


echo "son las $hora <br>"; 
if($hora>=3 and $hora<=12)
    echo "Buenos dias";
elseif($hora>=13 and $hora<=20)
    echo "Buenas tardes";
else 
    echo "Buenas nights";


/* INTENTO DE HACERLO CON UN SWITCH XD
switch ($resultado) {
case $hora>=3 and $hora<=12: 
    echo"Buenos dias por la morning";
break;
case $hora>=13 and $hora<=20:
    echo"Buenas tardes";    
break;
case :
    echo"Buenas noches alakama";  
break;
}
*/
?>

</body>
</html>