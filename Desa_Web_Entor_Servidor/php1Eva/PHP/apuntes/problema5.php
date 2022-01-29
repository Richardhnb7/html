<?php
/*
NUMEROS EN POSICONES IMPARES
*/
//Solucion
$maximo = 0;
$minimo = 1000;
$arra1 = array(12, 1, 7, 4, 15, 6, 9, 0);
$longitud = count($arra1) - 1;
$indice = 0;

while ($indice <= $longitud) {
    $indice/2;
    echo "el numero en medio es: ".$arra1[$indice]."<br>";
    

    if ($indice % 2 != 0) {
        echo "el numero " . $arra1[$indice] . " esta en posicon impar" . "<br>";
    }
    $indice++;
    
}
$media =  array_sum($arra1)/count($arra1);
echo $media;
