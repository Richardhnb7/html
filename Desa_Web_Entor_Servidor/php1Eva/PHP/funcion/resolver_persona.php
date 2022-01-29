<?php
session_start();
require_once ("persona.php");
$i=$_SESSION['indice'];

$j=0;
$contenido=array();
while ($j <= $i){

    $contenido[$j]= $_SESSION['per'.$j];
    $j++;
} 
$j=0;
$per=new Persona($nombre,$apellido,$dni);
while($j<=$i){
    $per=$contenido[$j];
    echo $per->getNombre()."<br>";
    $j++;
}
session_destroy();
?>