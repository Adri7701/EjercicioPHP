<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$edad=mt_rand(20,60);
$salario=mt_rand(600,3000);
echo "$edad $salario";

if ($salario<=1000){
    if ($edad<30){
        $salariofinal=1100;
    }
    elseif ($edad>=30 and $edad<=45){
        $salariofinal=$salario*1.03;
    }
    else {
        $salariofinal=$salario*1.15;
    }
}elseif ($salario>=1000 and $salario<=20000){
    if ($edad>45){
        $salariofinal=$salario*1.03;
    }elseif ($edad<=45){
        $salariofinal=$salario*1.10;
    }
}

    




?>

</body>
</html>