<?php
session_start();
require_once("funcion/funciones.php");
$i=$_SESSION['indice'];
//echo $i;
//$entrada=1;
$j=0;
$contenido=array();
while ($j<=$i)
{
	
	$contenido[$j]= $_SESSION['numero'.$j];
    echo $contenido[$j]."<br>";
	$j++;
    
}
$tamano= longitud($contenido);
echo $tamano;
$resultado = localizar_numero_en_array($contenido,$entrada);
echo $resultado;
session_destroy();
?>
