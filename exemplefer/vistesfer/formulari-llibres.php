<?php include "vistesfer/headerfer.php"?>

<?php
    $qs = isset($_REQUEST['id'])  ? "?id={$_REQUEST['id']}" : "";
?>
<form method="POST" action="editar-llibre.php<?php echo $qs?>" enctype="multipart/form-data">
    
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p class="required"><label for="titol">Títol</label>
            <input id="titol" type="text" required name="dades[titol]" maxlength="80" 
                   placeholder="Títol del llibre" value="<?php echo $infoLlibre['titol']?>">
        </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p><label for="subtitol">Subtítol</label>
            <input id="subtitol" type="text" name="dades[subtitol]" maxlength="80" 
                   placeholder="Subtítol del llibre" value="<?php echo $infoLlibre['subtitol']?>">
        </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p><label for="editorial">Editorial</label>
            <input id="editorial" type="text" name="dades[editorial]" maxlength="80" 
                   placeholder="Editorial del llibre" value="<?php echo $infoLlibre['editorial']?>">
        </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p><label for="any">Any de publicació</label>
            <input id="any" type="text" name="dades[any_publicacio]" maxlength="4" size="4" 
                   placeholder="Any de publicació" value="<?php echo $infoLlibre['any_publicacio']?>">
        </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p><label for="preu">Preu</label>
            <input id="preu" type="text" name="dades[preu]" maxlength="15" size="15" 
                   placeholder="Preu de venda" value="<?php echo $infoLlibre['preu']?>">
        </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p><label for="autor">Autor</label>
            <input id="autor" type="text" name="dades[autor_ref]" maxlength="15" size="15" 
                   placeholder="Id autor" value="<?php echo $infoLlibre['autor_ref']?>">
            <select id="autor" name = "dades ^[autor_ref]">
                <?php echo $htmlSelectAutors?>;
            </select>
        </p>
    </div>
    <div class="col-xs-12">
        <p>
            <textarea name="dades[resum]" placeholder="Resum del llibre"><?php echo $infoLlibre['resum']?></textarea>
        </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p><label for="imatge">Imatge</label>
            <input id="imatge" type="file" name="imatge">
        </p>
        <p>
            <?php if(isset($infoLlibre['id_imatge'])) {?>
            
            <img src="./uploads/<?php echo $infoLlibre['id_imatge']?>" style="width: 150px">
            
            <?php } ?>
        </p>
    </div>
    <div class="col-xs-12">
        <?php if(isset($infoLlibre['id'])) {?>
        <input type="hidden" name="dades[id_imatge]" value="<?php echo $infoLlibre['id_imatge']?>">
        <input type="hidden" name="dades[id]" value="<?php echo $infoLlibre['id']?>">
        <input type="hidden" name="id" value="<?php echo $infoLlibre['id']?>">
        <?php } ?>
        <input type="hidden" name="accio" value="<?php echo $accio?>">
        <p><input type='submit' value='Afegir'></p>
    </div>
</form>

<?php include "footerfer.php"?>