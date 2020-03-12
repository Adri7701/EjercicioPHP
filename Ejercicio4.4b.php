<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$num=$_GET["num"];
$irpf=$num*0.15;
$iva=$num*0.21;
$total=$num-$irpf+$iva;
?>
<p>El IRPF es <?=$irpf?> </p>
<p>El IVA es <?=$iva?> </p>
<p>El total es <strong><?=$total?></strong> </p>

</table> 
</body>
</html>