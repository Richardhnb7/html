<?php
/* Uso del foreach modificando array */
$arr1 = array(
    "Viernes" => 22,
    "Sábado" => 34
);
/* No modifica el array */

foreach ($arr1 as $cantidad) {
    $cantidad = $cantidad * 2;
}

print_r($arr1);
echo "<br>";

/* Modifica el array */

foreach ($arr1 as &$cantidad) {
    $cantidad = $cantidad * 2;
}

print_r($arr1);
