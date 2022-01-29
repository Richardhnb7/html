<?php
require_once 'persona.php';
session_start();
$cadena_conexion = 'mysql:dbname=empresa;host=localhost';
$usuario = 'usuario';
$clave = 'password';
try{
    //conectar
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexion realizada con éxito <br>";
    //insert

        $ins = "INSERT INTO nuevaspersonas(nombre,apellidos,dni) VALUES ('$_POST[nombre]','$_POST[apellido]','$_POST[dni]');";
        $resul = $bd ->query($ins);
        //comprobar errores
        if($resul){
            echo "insert correcto <br>";
            //echo "Filas insertadas: ". $resul -> rowCount(). "<br>";
        } else {
            print_r($bd -> errorinfo());
        }


    
    
    //comprobacion errores
}catch(PDOException $e){
    echo "Error con la base de datos: ". $e->getMessage();
}

