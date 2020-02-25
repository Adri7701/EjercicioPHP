<html>
    <head>
        <title> Primera Web  </title>
        <meta charset = "utf-8">
    </head>

    <body>
    <!--això es un comentari d' html que no es veurà a la web però si en el codi font, boto dret: llegir codi -->
    <?php
        // aixi s'escriuen els comentaris d'una sola linia que no sortiran mai per pantalla Front end
        /* aquest és un comentari que pot tenir vàries linies, per si m'enrotllo molt
        i no en tinc prou amb una linia */
        
        $x=10; // definim una variable, es fa amb el signe $
        $valor=20; // com més clara sigui el nom de la variable, millor
        echo "<p> Hola des de <strong> PHP </strong></p>";
        echo $x; // aqui escribim el valor de la variable perquè surti per pantalla
    ?>
        <p> Aquesta és la primera web </p>
        <p>
            <strong> 
                Text en negreta 
            </strong>
        </p>
        <p>
            <i> 
                Text en cursiva 
            </i>
        </p>
        <p>
            <u> 
                Text subratllat 
            </u>
        </p>
        <p>
            si no hem posat el meta charset, accent tancat: &_acute, 
            i accent obert &_grave
        </p>
        <p>
            <a href="http://google.com"> això és un link a google </a>
        </p>

        <table>
            <tr>
                <td>
                    <p> el tr ens descriu les columnes </p>
                </td>
                <td>
                    <p> 2 </p>
                </td>
                <td>
                    <p> 3 </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p> el td ens descriu les files </p>
                </td>
                <td>
                    <p> 5 </p>
                </td>
                <td>
                    <p> 6 </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p> 7 </p>
                </td>
                <td>
                    <p> 8 </p>
                </td>
                <td>
                    <p> 9 </p>
                </td>
            </tr>
        </table>
    </body>
</html>