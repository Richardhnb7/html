<?php
require_once 'bd.php';
require_once 'producto.php';
require_once 'act.php';
require_once 'sesiones.php';


session_start();

$bd=conexion();
$i=$_SESSION['in'];
echo $i;
$j=0;
$contenido=array();

while ($j<=$i) {
    $contenido[$j]=$_SESSION['act'.$j];
    $j++;
}
session_destroy();
print_r($contenido);
actualizar_producto($bd,$contenido);
echo " actualizado";

?>