<?php
require_once('persona.php');
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

foreach ($contenido as $clave=>$valor){
    
   echo $valor. "<br>";
    
}
session_destroy();
?>
