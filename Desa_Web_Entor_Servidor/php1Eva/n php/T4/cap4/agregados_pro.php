<?php

require_once 'bd.php';
require_once 'producto.php';
require_once 'sesiones.php';
session_start();



$bd=conexion();
$i=$_SESSION['indice'];

$j=0;
$contenido=array();

while ($j<=$i) {
    $contenido[$j]=$_SESSION['pro'.$j];
    $j++;
}
session_destroy();
print_r($contenido);
agregarproducto($bd,$contenido);

?>
