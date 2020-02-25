<?php
/**
 * Classe amb mètodes estàtics que ens permet evitar codi repetitiu 
 * métudes per crear estructures comunes en HTML.
 * @author marc
 */
class FormatsHtml{
// $elements es un array de tipus clau 0> valor
    public static function crearSelect($elements, $seleccionats = array())
    {
    $htmlSelect = "";
    if(empty ($seleccionats))
    {
        $htmlSelect = "<option value=''>Selecciona una opcio</option>";
    }
    foreach ($elements AS $clau => $valor)
        
    { 
        $selected = "";
        if (in_array($clau, $seleccionats))
            $selected = "selected";
                        
     $htmlSelect .= "<option $selected value= '{$clau}'>{$valor} </option>";  
    }
    
    return $htmlSelect;
    }
}