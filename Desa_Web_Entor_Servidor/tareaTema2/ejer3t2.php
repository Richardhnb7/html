<?php
include './matematicas.php';
$array=ecuacion(4,6,2);
if ($array!=true) {
    echo "no tiene soluciones";
}else {
    for ($i=0; $i <count($array) ; $i++) { 
        echo "$array[$i]<br> ";
}
}
?>
