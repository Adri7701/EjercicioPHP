<?php

$username = "root";
$password = "";
$bd = "llibres_php";
include "classes/FormatsHtml.php";
include "class/connexio.php";
$connexio = new connexio($username, $password, $bd);
include "models/Llibres.php";
$llibre = new Llibres($connexio);


include "models/Autors.php";
$autors = new Autors ($connexio);

// FEINA A FER: CREAR UN SELECT PELS AUTORS

// FEINA A FER (DEURES ;) ): QUÈ CAL MODIFICAR/AFEGIR PER CREAR UN FORMULARI PER 
// AFEGIR LLIBRES NOUS?

if(isset($_REQUEST['id']) && isset($_REQUEST['accio']))
{
    $idImatge = pujaImatge($_REQUEST['id']);
    if($idImatge !== false )
    {
        $_REQUEST['dades']['id_imatge'] = $idImatge;
    } else{
        echo "la imatge no s'ha pogut pujar correctament";
    }
    
    $llibre->setDades($_REQUEST['dades']);
    if($_REQUEST['accio'] == 'editar') 
    {
        $llibre->actualitzarLlibre();
        $infoLlibre = $llibre->getDades();
    }
    
} elseif(isset($_REQUEST['id']))
{
    $infoLlibre = $llibre->seleccionarPerId($_REQUEST['id']);
    $accio = "editar";
   
 
   /*
    $htmlSelectAutors = "";
    foreach ($llistatAutors AS $autorConcret)
        
    { 
        $selected = "";
        if ($infoLlibre ['autor_ref']== $autorConcret ['id'])
            $selected = "selected";
                        
     $htmlSelectAutors .= "<option $selected value= '{$autorConcret['id']}'> ´{$autorConcret['cognoms']}, {$autorConcret['nom']} </option>";  
    }
    */ 
// SELECT d'autors
    $llistatAutors = $autors -> llistatAutors ();
    $elements =array();
    foreach ($llistatAutors AS $autorConcret)
    {
        $elements[$autorConcret['id']] = "{$autorConcret['cognoms']}, {$autorConcret['nom']}";
    }
    $htmlSelectAutors = FormatsHtml::crearSelect($elements, array ($infoLlibre ['autor_ref']));
    
    
    
    
} elseif (isset ($_REQUEST['acció'])&& $_REQUEST ['acció'] == 'nou') {
    // Inserir un llibre nou.
    $llibre->setDades($_REQUEST ['dades']);
    $llibre-> afergirllibre ();
}

else {
    // Crear formulari en blanc
    $infoLlibre = $llibre->getDades();
    $accio = "nou";
    // SELECT d'autors
    $llistatAutors = $autors -> llistatAutors ();
    $elements =array();
    foreach ($llistatAutors AS $autorConcret)
    {
        $elements[$autorConcret['id']] = "{$autorConcret['cognoms']}, {$autorConcret['nom']}";
    }
    $htmlSelectAutors = FormatsHtml::crearSelect($elements);
   
}


include "vistesfer/formulari-llibres.php";

function pujaImatge($id)
{
    // FEINA A FER:
    // CODI PER PUJAR LA IMATGE
   
    
    $targetDir = __DIR__."/imatges/";
    $targetFile = $targetDir . $_FILES['imatge']['name'];
   //Retorna l'extensió de l'arxiu.
   // echo pathinfo($targetFile, PATHINFO_EXTENSION). "<BR>" ;
    //Retorna el nom de l'arxiu dins una ruta
    //echo pathinfo($targetFile, PATHINFO_BASENAME);         
   
    
    $correcte =true;
    //Retorna un array amb la info de la imatge o false si la imatge no es correcte.
    $check = getimagesize($_FILES['imatge'] ['tmp_name']);
   
    if($check === false)
        $correcte = false;
    if ($correcte === true)
    {
        $basename = pathinfo($targetFile, PATHINFO_BASENAME);
        $extensio = pathinfo($targetFile, PATHINFO_EXTENSION);
        $targetFile = str_replace($basename, "$id.$extensio", $targetFile);
        if(move_uploaded_file($_FILES ['imatge']['tmp_name'], $targetFile))
        {
            return "$id.$extensio";
        }
    }
    
    return false;
}