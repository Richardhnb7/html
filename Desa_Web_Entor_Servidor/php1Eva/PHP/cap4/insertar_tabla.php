<?php
/*comprueba que el usuario haya abuerto sesion o <redirige*/
require_once 'sesiones.php';
require_once 'bf.php';
comprobar_sesion():
$bd=conexion();
$tabla=$_POST['tabla'];
$campo1=$_POST['campo1'];
$campo2=$_POST['campo2'];
$sql='create table tabla($campo1,$campo2)';
if (!isset($fichero)) {
    $fichero=fopen("tabla.txt",w)
    $sql=
}



$unidades=(int)$_POST('unidades');
$consulta='Select Stock from productos where CodProd='$cod'';
$resultado=$bd->query($consulta);
if ($resultado<$unidades) {
    /*si existe el codigo sumamos las unidades*/
    if (isset($_SESSION['carrito'][$cod])) {
        $_SESSION['carrito'][$cod]+=$unidades;
    }else {
        $_SESSION['carrito'][$cod]=$unidades;
    }

}else {
    echo "no puden añadirser esas unidades
    <a href=productos.php>enviar a productos</a>";
}
?>