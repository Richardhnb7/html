<?php

require_once('persona.php');

require_once('funcion.php');
session_start();
$i=$_SESSION['indice'];

$j=0;
$contenido=array();
while ($j<=$i) {
    $contenido[$j]=$_SESSION['per'.$j];
    $j++;
}
session_destroy();
//Conexion Base de dtaos
$clave="1234";
$usuario="usuario";
$cadena_conexion = "mysql:dbname=empresa;host=127.0.0.1";

$bd=conexion_bd($cadena_conexion,$usuario,$clave);
//inserccion datos


if(isset($bd)){
$bd->beginTransaction();
$sql = "insert into personas(dni, nombre, apellido) values(?, ?, ?);";
$result = $bd->prepare($sql);
foreach($contenido as $clave=>$valor){
    $dni=$valor->getDni();
    $nombre=$valor->getNombre();
    $apellido=$valor->getApellido();

    echo "estoy en este punto"."<br>";
	$result->execute(array($dni,$nombre,$apellido));
    echo "he pasado la insercion <br>";
    
	//comprobar errores
	if($result) {
        echo $result->rowCount();
		echo "insert correcto <br>";
		echo "Filas insertadas: " . $result->rowCount() . "<br>";
       
	}else {
            echo "Estoy dentro del error<br>";
            print_r( $bd -> errorinfo());
            $bd->rollback();
           }	
	
    
}
$bd->commit();
}
 

?>