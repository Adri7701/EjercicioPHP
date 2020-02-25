<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $item[0]=50;
        $item[1]=35;
        $item[2]=47;
        $item[3]=73;
        $item[6]=43;
        $item[9]=78;
        $item[12]=12;
        
        /*$item=array(50,35,47,73);*/

        for($i=0;$i<=12;$i++){
            if (isset($item[$i])){
            echo $item[$i]."<br>";
        }
    ?>
</body>
</html>