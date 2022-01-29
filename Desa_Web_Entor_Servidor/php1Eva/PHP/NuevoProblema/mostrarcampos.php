<?php

$codigo = $_POST['codigo'];
$cadena_conexion="mysql;dbname=empresa;host=127.0.0.1";
$usuario='usuario';
$clave='password';
try{
    $bd=new PDO($cadena_conexion,$usuario,$clave);
    echo "Conexion realizada con exito";
    $consulta = "SELECT nombre,clave FROM usuarios where codigo = ${codigo}";
    $usuarios = $bd -> query($consulta);
    foreach ($usuarios as $row){
        print $row['nombre']."<br>";
        print $row['clave']."<br>";
        print $row['rol']."<br>";
    }
    
} catch (PDOException $e){
    echo "Error con la base de datos: ". $e->getMessage();
}