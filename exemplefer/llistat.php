<?php
$username = "root";
$password = "";
$bd = "llibres_php";
include "class/connexio.php";
$connexio = new connexio($username, $password, $bd);
include "models/Llibres.php";
$llibre = new Llibres($connexio);

$directoriLocale = dirname(__FILE__) . "/locale";
$domini = "traduccio";
$locale = "en";

setlocale(LC_ALL, $locale);
bindtextdomain($domini, $directoriLocale);
textdomain ($domini);
        
$llistat= $llibre->llistatDarrers();
$llistatHtml ="";
foreach ($llistat AS $llibre)
{
    ob_start();
    include "vistesfer/fitxa-llibre.php";
    $llistatHtml = $llistatHtml . ob_get_contents();
    ob_clean();
}

include "vistesfer/llistat-llibres.php";