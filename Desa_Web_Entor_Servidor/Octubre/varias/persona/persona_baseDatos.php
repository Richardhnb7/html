<?php
//datos personales
$cadena_conexion=''
$usuario='root';
$clave='';
try {
    //conectar
    $bd= new PDO($cadena_conexion,$usuario,$clave);
    echo "conexion realizada con existo <br>";
    //insertar un nuevo  usuario
    $ins="insert nito usuarios (Nombre, Apellido, Dni)";
        values()


} catch (PDOException $e) {
    echo 'error conla base de datos: '. $e->getMessage();
}