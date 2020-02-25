<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>exemple 1</title>
    </head>
    <body>
        <h1> el meu exemple </h1>
        <?php
        echo "<h2> hola</h2>";
        ?>
        <h2> 
            <?php echo " adeu"; ?>
        </h2>
        <p>
            <?php
                  
            $a="marc";
            echo " el meu nom es: " .$a;
            ?>        
        </p>
          
          <p>
              <?php
              //$a =46;
              echo " tinc" . $a;
              ?>
               
          </p>
          
          <?php
          var_dump($a);
   
          print_r ($_SERVER);
          ?>
    </body>
</html>
