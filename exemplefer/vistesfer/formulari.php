<?php include "vistesfer/headerfer.php"?>

<?php if( isset($infoPagina['resultat']) && $infoPagina['resultat']) {?>
    <div><p>Les dades s'han creat correctament</p></div>
<?php } elseif( isset($infoPagina['resultat']) && !$infoPagina['resultat']) { ?>
    <div><p>Les dades no s'han creat correctament</p></div>
<?php } ?>

    
<form method="POST" action="ex-formulari.php">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p class="required"><label for="nom">Nom</label>
            <input id="nom" type="text" required name="dades[nom]" maxlength="60" 
                   placeholder="Escriu el teu nom">
        </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p><label for="cognoms">Cognoms</label><input placeholder="Escriu el teu cognom" id="cognoms" type="text" required name="dades[cognoms]" maxlength="60"></p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p><label for="nom">Email</label><input id="email" type="email" name="dades[email]" maxlength="60"></p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p><label>Alias</label><input type="text" name="dades[alias]" maxlength="60"></p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p><label>Telf</label><input type="text" name="dades[telf]" maxlength="60"></p>
    </div>
    
    <div class="col-xs-12 col-sm-6 col-md-6">
        <p>
            <select name="selector">
                <option value="" disabled selected hidden="">Opció per simular placeholder</option>
                <option value="1">Opció 1</option>
                <option value="2">Opció 2</option>
                <option value="3">Opció 3</option>
                <option value="4">Opció 4</option>
                <option value="5">Opció 5</option>
                <option value="6">Opció 6</option>
            </select>
        </p>
    </div>
    
    <div class="col-xs-12">
        <p>
            <select name="selector2">
                <option value="" disabled selected hidden="">Opció per simular placeholder</option>
                <option value="1">Opció 1</option>
                <option value="2">Opció 2</option>
                <option value="3">Opció 3</option>
                <option value="4">Opció 4</option>
                <option value="5">Opció 5</option>
                <option value="6">Opció 6</option>
            </select>
        </p>
    </div>
    <div class="col-xs-12">
        <p>
            <textarea name="textLlarg" placeholder="Escriu alguna cosa"></textarea>
        </p>
    </div>
    <div class="col-xs-12">
        <p>
            <input id="check1" type="checkbox" name="check1" checked=""><label class="cb" for="check1">Check 1</label>
            <input id="check2" type="checkbox" name="check2"><label class="cb" for="check2">Check 2</label>
            <input id="check3" type="checkbox" name="check3"><label class="cb" for="check3">Check 3</label>
        </p>
    </div>
    <div class="col-xs-12">
        <p>
            <input id="radio1" type="radio" name="radio" value="3" checked=""><label class="cb" for="radio1">Radio 1</label>
            <input id="radio2" type="radio" name="radio" value="3"><label class="cb" for="radio2">Radio 2</label>
            <input id="radio3" type="radio" name="radio" value="3"><label class="cb" for="radio3">Radio 3</label>
        </p>
    </div>
    <div class="col-xs-12">
        <input type="hidden" name="accio" value="afegir">
        <p><input type='submit' value='Afegir'></p>
    </div>
</form>

<?php include "footerfer.php"?>