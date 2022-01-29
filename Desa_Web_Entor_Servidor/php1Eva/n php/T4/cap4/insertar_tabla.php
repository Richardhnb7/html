<?php
require_once 'bd.php';
require_once 'sesiones.php';
comprobar_sesion();
$bd=conexion();

$tabla=$_post['tabla'];
$campo1=$_POST['campo1'];
$campo2=$_POST['campo2'];

if(!isset($file)){
    $fichero=fopen('tablas.txt,w');
    $sql='create tabla';
}
$unidades=(int)$_POST['unidades'];
$consulta ='select stock '
?>