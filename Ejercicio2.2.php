<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $rojo=mt_rand(0,255);
    $verde=mt_rand(0,255);
    $azul=mt_rand(2,255);
    echo  "<style>body{background-color: rgb($rojo,$verde,$azul);}</style>";
?>
</body>
</html>