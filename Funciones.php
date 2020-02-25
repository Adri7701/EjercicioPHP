<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   

    function Suma($x,$exponente){
        $valor=1;
        for ($i=1;$i<=$exponente;$i++){
            $valor=$valor*$x;
        }
        return $valor;
    }
    echo potencia(2,6);

    ?>
    <form action="Funciones.php" method= $_GET>
    x: <input type="number" name="x" min="1" max="100" autofocus="">
    <select name="operacion">
     <option name="operacion" value="Suma">+</option>
     <option name="operacion" value="Resta">-</option>
     <option name="operacion" value="Multiplicacion">*</option>
     <option name="operacion" value="Division">/</option>
    </select>
    <?php
    
    
    ?>
</body>
</html>