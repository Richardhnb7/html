<?php
require_once 'form_introducir_persona.php';
session_start();
$host = 'localhost';
$dbname = 'empresa';
$username = 'usuario';
$password = 'password';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        echo `Conectado a la base de datos: ${$dbname} en ${$host} correctamente`;
        $sql = "INSERT INTO nuevaspersonas (nombre, apellidos, dni) VALUES ($nombre,$apellido,$dni)";


} catch (PDOException $pe){
    die(`No es posible conectarse al a base de datos: ${$dbname} `.$pe->getMessage());
}