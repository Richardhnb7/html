<?php
//
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'usuario';
$clave = '1234';
try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
} catch (PDOException $e) {
    echo 'Error con la base de datos: ' . $e->getMessage();
} 


?>