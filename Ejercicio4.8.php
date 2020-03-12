<!DOCTYPE html>
<html lang="es">
<head>
    <title>Epilepsia cuadros</title>
    
     <link rel="stylesheet" href="estilo48.css">
    
</head>
<body>
   <?php
    for($i=1;$i<=2000;$i++){
    $x=mt_rand(1,100);
    $y=mt_rand(1,100);
    $colorR=mt_rand(0,255);
    $colorG=mt_rand(0,255);
    $colorB=mt_rand(0,255);
    echo "<div style='left:$x%; top:$y%; background-color:rgb($colorR,$colorG,$colorB)'></div>";
}
?>

</body>
</html>