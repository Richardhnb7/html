<?php 
/*comprueba que el usuario haya abierto sesión o redirige*/
require_once 'sesiones.php';
$bd=conexion();
comprobar_sesion();
$cod = $_POST['cod'];
$unidades = (int)$_POST['unidades'];
$consulta="Select stock from productos where CodProd='$cod'";
$resultado=$bd->query($consulta);
if ($resultado>$unidades){
	/*si existe el código sumamos las unidades*/
	if(isset($_SESSION['carrito'][$cod])){
		$_SESSION['carrito'][$cod] += $unidades;
	}else{
		$_SESSION['carrito'][$cod] = $unidades;		
	}header("Location: carrito.php");

}else{
	echo 
	'No pueden añadirse esas unidades'.
	'<a href="productos.php"></a>';
}
?>

