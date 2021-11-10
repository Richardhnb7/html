<?php
function palindromo($palabra){//se le psa la cadena
    $cadena=$palabra;
    $palabra=strtolower(str_replace(" ", "",$palabra));// esto quita los espacios 
    if (strrev($palabra)==$palabra){//aqui comprueba y dependiendo del resultado 
        //te da un mensaje o otro
        return "la palabra: $cadena, es palindromo ";

    }else {
        return "la palabra: $cadena, no es palindromo ";
    }
}
$pal="oso oso";
$resultado=palindromo($pal);
echo $resultado;//te muestra el resultado de la funcion
?>