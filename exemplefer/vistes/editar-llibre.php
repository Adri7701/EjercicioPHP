
<?php

$username = "root";
$password = "";
$bd = "llibres_php";
include "classes/Connexio.php";
$connexio = new Connexio($username, $password, $bd);
include "models/Llibres.php";
$llibre = new Llibres($connexio);

include "models/Autors.php";
$autor = new Autors($connexio);

// Obtenim el llistat d'autors
$llistatAutors = $autor->llistatAutors();

if(isset($_REQUEST['id']) && isset($_REQUEST['accio']))
{
    $idImatge = pujaImatge($_REQUEST['id']);
    if($idImatge !== false )
    {
        $_REQUEST['dades']['id_imatge'] = $idImatge;
    }
    
    $llibre->setDades($_REQUEST['dades']);
    if($_REQUEST['accio'] == 'editar') 
    {
        $llibre->actualitzarLlibre();
        $infoLlibre = $llibre->getDades();
        
    }elseif($_REQUEST['accio'] == 'nou')
    {
        $llibre->afegirLlibre();
    }
    
} elseif(isset($_REQUEST['id']))
{
    $infoLlibre = $llibre->seleccionarPerId($_REQUEST['id']);
    $accio = "editar";
    

    // Construim el SELECT
    $htmlSelectAutors = "";
    foreach($llistatAutors AS $autorConcret)
    {
        $selected = (isset($infoLlibre['autor_ref']) && $infoLlibre['autor_ref'] == $autorConcret['id']) ? "selected" : "";
        $htmlSelectAutors .= "<option value='{$autorConcret['id']}' $selected>{$autorConcret['cognoms']}, {$autorConcret['nom']}</option>";
    }
} else {
    //Form en blanc
    $infoLlibre = $llibre->getDades();    
    $accio = "nou";
    
    // Construim el SELECT
    $htmlSelectAutors = "<option value='' selected>Escollir autor</option>";
    foreach($llistatAutors AS $autorConcret)
    {
        $htmlSelectAutors .= "<option value='{$autorConcret['id']}'>{$autorConcret['cognoms']}, {$autorConcret['nom']}</option>";
    }

}

include "vistes/formulari-llibres.php";

function pujaImatge($id)
{
    $target_dir = __DIR__ . "/uploads/";
    $target_file = $target_dir . basename($_FILES['imatge']["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    $basename = pathinfo($target_file,PATHINFO_BASENAME);
    $idImatge = "$id.$imageFileType";
    $target_file = str_replace($basename, $idImatge, $target_file);
    
    //echo "TYPE : $imageFileType\n";
    
    $check = getimagesize($_FILES['imatge']['tmp_name']);
    print_r($check);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES['imatge']["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["imatge"]["name"]). " has been uploaded.";
            return $idImatge;
        } else {
            echo "Sorry, there was an error uploading your file.";
            
        }
    }
    return false;
}