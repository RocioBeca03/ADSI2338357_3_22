<?php

//convertir un texto dado de acuerdo a la solicitud a mayusculas o minusculas

$vrTexto="centro de teleimformatica y produccion induatrial";
$vrConvertir="minusculas";

function convertir_texto($convertir,$texto){

if($convertir="minusculas"){
    $vrConvertir_texto=strtoupper($texto);
}
elseif($convertir="mayusculas"){
    $vrConvertir_texto=strtolower($texto);
}
return $vrConvertir_texto;

}

echo convertir_texto($vrConvertir,$vrTexto);

?>