<?php
//en este ejemplo se trata de intercambiar la ultima palabra 
// con la palabra mayor 
$texto= "hola como has estado zapato en estos ultimosss dias";
$palabras= explode(" ",$texto);
function mayor_array($palabras){
    $auxiliar= "a";
    $indice= 0;
    for ($i=0; $i <= count($palabras)-1 ; $i++) { 
        if (strcmp($palabras[$i],$auxiliar)>=0) {
            $indice=$i;
            $auxiliar=$palabras[$i];
        }
    }
    return $indice;
}
function intercambio($pala,$indic){
    $ax=count($pala)-1;
    $ultima_palabra=$pala[$ax];
    $palabra_mayor=$pala[$indic];
    $pala[$ax]=$ultima_palabra;
    $pala[$indic]=$ultima_palabra;
    return $pala;
}
function mostrar($arra1){
    $a=0;
    while ($a <= count($arra1)-1) {
        echo $arra1[$a]." ";
        $a++;
    }
}
$aux =mayor_array($palabras);
$nuevo_array = intercambio($palabras,$aux);
mostrar($nuevo_array);
?>