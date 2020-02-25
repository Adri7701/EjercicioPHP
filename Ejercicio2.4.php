<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$x=mt_rand(1,7);
switch ($x) {
case $x==1: 
    echo"Si, "."Toca Plastica";
break;
case $x==2:
    echo"No, "."PHP";    
break;
case $x==3: 
    echo"Si, "."Mas PHP";
break;
case $x==4:
    echo"Si, "."CSS";    
break;
case $x==5:
    echo"Si, "."HTML";    
break;
case $x==6:
    echo"Si, "."Full de mango de HTML";    
break;
case $x==7:
    echo"No, "."PRL";
}

?>

</body>
</html>