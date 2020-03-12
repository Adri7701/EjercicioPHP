<!DOCTYPE html>
<html lang="es">
<head>
    <title>Primera Funcion</title>   
     <link rel="stylesheet" href="estilo48.css">
</head>
<body>

<?php
    function descuento($dinero){
        if ( $dinero <= 100){
            return 0;
        }    
        else if($dinero >= 100 and $dinero <= 499.99){
            return $dinero * 0.10;
        }
        else {
            return $dinero * 0.15;
        } 
    }
?>

<form action="Ejercicio5.2.php" method="get">
    <br>
    Dinerico: <input type="number" name="dinero" min="0" max="10000" autofocus>
    <br>
    <br>
    <input type="submit" value="Calcular">
</form>
    <br>
<?php
    $dinero = $_GET["dinero"];
    $dinerofinal = $dinero - descuento($dinero);
    echo "Total a pagar: <strong>$dinerofinal</strong>";
?>

</body>
</html>