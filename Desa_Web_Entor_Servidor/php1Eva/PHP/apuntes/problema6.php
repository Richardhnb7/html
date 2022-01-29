<?php
/* recorrido array con foreach */
$arr1 = [
    0 => 444,
    1 => 222,
    2 => 333,
];
print_r($arr1);
echo "<br>" . "pos 0: " . $arr1[0] . "<br>";
$arr1[0] = 555;
print_r($arr1);
echo "<br>";
$arr2 = array(
    "1111A" => "Juan Vera Ochoa",
    "1112A" => "Maria Mesa Cabeza",
    "1113A" => "Ana Puertas Peral"
);
foreach ($arr2 as $clave => $valor) {
    echo "La clave es " . $clave . " El nombre es " . $valor;
    echo "<br>";
}

foreach ($arr2 as $clave => $valor) {
    echo "El nombre es " . $valor;
    echo "<br>";
}


$arr3 = array(
    "Pedro" => "Alarcon",
    "Juan" => "Perez",
    "Esperanza" => "Garcia"
);
foreach ($arr3 as $clave => $valor) {
    echo "El nombre es " . $clave . " El apellido es " . $valor;
    echo "<br>";
}

$arr2["1113A"] = "Ana Puertas Segundo";

