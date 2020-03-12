<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eres cornudo?</title>
</head>
<body>

<?php
    $puntos=$_GET["b1"]+$_GET["b2"]+$_GET["b3"]+$_GET["b4"]+$_GET["b5"];

    echo "<strong>Tu puntuacion a sido: $puntos</strong><br>";
    if($puntos<6){
        echo "Puedes estar tranquilo.";
    }

    elseif($puntos>=6 & $puntos<8){
        echo "Podria a ver otro pero solo es un pequeño porcentaje.";
    }

    elseif($puntos>=9 & $puntos<11){
        echo "Empieza a oler un poco raro por aqui..";
    }

    elseif($puntos>=12){
        echo "Tienes mas cuernos que un saco caracoles.";
    }
?>
        
</body>
</html>