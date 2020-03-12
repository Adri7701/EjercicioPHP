<!DOCTYPE html>
<html lang="es">
<head>
    <title>Primera Funcion</title>   
     <link rel="stylesheet" href="estilo48.css">
</head>
<body>
<?php
    function sumar($numero1,$numero2){
        return $numero1+$numero2;
    }
    function restar($numero1,$numero2){
        return $numero1-$numero2;
    }
    function multiplicar($numero1,$numero2){
        return $numero1*$numero2;
    }
    function dividir($numero1,$numero2){
        return $numero1/$numero2;
    }

    if (isset( $_GET["operadores"])){
        $operadores = $_GET["operadores"];
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
    }

    
    ?>

    <form action="Ejercicio5.1.php" method="get">
    <select name="operadores">
    <option value="suma">Suma</option>
    <option value="resta">Resta</option>
    <option value="multiplicacion">Multiplicacion</option>
    <option value="division">Division</option>
    </select>
    <br>
    <br>
        Primer digito: <input type="number" name="numero1" min="0" max="1000" autofocus>
        Segundo digito: <input type="number" name="numero2" min="0" max="1000" >
        <br>
        <br>
        <input type="submit" value="enviar" >
    </form>
<?php

if($operadores == "suma"){
    echo sumar($numero1,$numero2);
}else if($operadores == "resta"){
    echo restar($numero1,$numero2);
}else if($operadores == "multiplicacion"){
    echo multiplicar($numero1,$numero2);
}else if($operadores == "division"){
    echo dividir($numero1,$numero2);
}

?>

</body>
</html>