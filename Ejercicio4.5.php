<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Caja fuerte</h1>

<?php
$mostrarform=true;
if (isset($_GET["intent"])){
    $contraseña=$_GET["numero"];
    $contador=$_GET["intent"];
    $contador=$contador+1;
}else{
    $intentos=0;
}

if($contraseña == 1234){
    echo "<h2>Has abierto la caja fuerte!</h2>";
    echo '<img src="cajafuerte.png" heigth="500" width="500">';
    $mostrarform = false;
    $contador = 0;
}
elseif($contador >= 4){
    echo 'Has gastado tus 4 intentos, a fregar <br><br>';
    echo '<a href="http://localhost/Ejercicio4.5.php"><img src="https://www.linuxenespañol.com/wp-content/uploads/2017/09/Reiniciar-tarjeta-de-red.png" width="200" heigth="200"></a>';
    $mostrarform = false; 

    $contador = 0;
}
else {
    echo 'Lo siento crack, pero esa no es la combinacion';
}
if ($mostrarform == true){

?>
    <form action="Ejercicio4.5.php" method= get>
    <p>Introduzca la contraseña : <input type="number" name="numero" min="1000" max="9999" autofocus></p>
    <input type="hidden" name="intent" value="<?=$contador?>">
    </form>
<?php

}



?>
    

    
</body>
</html>