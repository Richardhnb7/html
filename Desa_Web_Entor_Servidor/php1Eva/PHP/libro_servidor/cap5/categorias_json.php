<?php 
	/*comprueba que el usuario haya abierto sesión o redirige*/
	
	require_once 'funciones.php';
	$localhost='127.0.0.1';
	$base_datos='pedidos';
	$usuario='root';
	$clave='David-051197';
	$bd=conexion($localhost,$base_datos,$usuario,$clave);
	$categorias = cargar_categorias($bd);//la consulta
	$json=json_encode($categorias);
	print_r($json);
		
?>
	
