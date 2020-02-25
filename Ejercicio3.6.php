<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php  
    $a=mt_rand(0,10000);
    $primo=true;
    for ($i=2;$i<$a;$i++){

        if ($a%$i==0){
            $primo=false;
        }
    }
    if ($primo==true){

        echo "$a Es un numero primo";
    }
    else{
        echo "$a No es un numero primo";
    }
?>  
    

    
</body>
</html>