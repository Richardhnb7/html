<?php
require_once('persona.php');
require_once('bd_conect.php');
session_start();
$i=$_SESSION['indice'];


$j=0;
$contenido= array();
while ($j<=$i)
{
	
	$contenido[$j]= $_SESSION['per'.$j];
    //echo $_SESSION['per'.$j];
   
	$j++;
    
}
session_destroy();
$bd->beginTransaction();
$sql = "insert into persona(dni, nombre, apellido) values(?, ?, ?);";
$result = $bd->prepare($sql);

foreach ($contenido as $clave=>$valor){
   $dni= $valor->getdni();
    $nombre= $valor->getnombre();
    $apellido=$valor->getapellido();
   
   
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

?>
