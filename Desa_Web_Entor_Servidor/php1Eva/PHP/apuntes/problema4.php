
<?php
/*
Dado una serie de numeros introducidos por teclado,
la terminación de la entrada de datos es 0.
me pide calcular el minimo y el maximo de esos 
numeros que acabo de introducir. (Numeros guardados en un array).
*/
//Solucion
$maximo = 0;
$minimo = 1000;
$arra1 = array(12, 1, 7, 4, 15, 6, 9, 0);
$longitud = count($arra1) - 1;
$indice = 0;
while ($indice < $longitud) {
    if ($arra1[$indice] > $maximo) {
        $maximo = $arra1[$indice];
    }

    if ($arra1[$indice] < $minimo) {
        $minimo = $arra1[$indice];
    }
    $indice++;
}
echo "el valor maximo en el array es " . $maximo . "<br>";
echo "el valor minimo en el array es " . $minimo . "<br>";

?>


<?php
/*
IMPARES
*/
//Solucion
$maximo = 0;
$minimo = 1000;
$arra1 = array(12, 1, 7, 4, 15, 6, 9, 0);
$longitud = count($arra1) - 1;
$indice = 0;
$posicon = 0;
while ($indice < $longitud) {
    if ($arra1[$indice] % 2 != 0) {
        $maximo = $arra1[$indice];

        echo "el numero " . $maximo . " es impar" . "<br>";
    }

    if ($arra1[$indice] % 2 == 0) {
        $minimo = $arra1[$indice];
        echo "el numero " . $minimo . " es par" . "<br>";
    }
    $indice++;
}
echo "el valor impar en el array es " . $maximo . "<br>";
echo "el valor par en el array es " . $minimo . "<br>";

?>

<?php
/*
IMPARES
*/
//Solucion
$maximo = 0;
$minimo = 1000;
$arra1 = array(12, 1, 7, 4, 15, 6, 9, 0);
$longitud = count($arra1) - 1;
$indice = 0;
$posicon = 0;
while ($indice < $longitud) {
    if ($arra1[$indice] % 2 != 0) {
        $maximo = $arra1[$indice];
        if ($indice % 2 != 0) {
            echo "el numero " . $maximo . " esta en posicon impar" . "<br>";
        }
    }

    $indice++;
}


?>