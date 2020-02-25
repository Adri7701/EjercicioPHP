<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$num=mt_rand(1,50);
$i=1;
    while($i<=100){
        $i++;
        $resultado=$num+$i;
        echo "$resultado<br>";
    }





?>

</body>
</html>