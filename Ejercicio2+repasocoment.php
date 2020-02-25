<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    //$verdadero=true;
    //echo $verdadero; //esto es un -booleano-

    $imagen=mt_rand(0,1); //mt_rand: de te da un valor aleatorio entre lo que lo le des
    if ($imagen==0) { //if: si es este, ara lo que le has mandao
        echo '<img src="Pepsi.png">';
    }else { //else: si no es "if" ara lo contrario. Y elseif: para darle otra accion 
        echo '<img src="Liga.png">';
    }
?>
    
</body>
</html>