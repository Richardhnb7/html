<?php
//PALABRA MAYOR CON FUNCION 
$texto = "esto es un texto para saber cual es la palabra mayor";
$palabras = explode(" ", $texto);
function mayor_array($palabras){
    $auxiliar="a";
    $indice = 0;
    for ($i=0; $i<=count($palabras)-1;$i++){
        if (strcmp($palabras[$i],$auxiliar)>=0){
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
    $pala[$ax]=$palabra_mayor;
    $pala[$indic]=$ultima_palabra;
    return $pala;
    

}
$palabras=intercambio($pala,$indic);
echo " La palabra mayor es: ". $pala;


?>

