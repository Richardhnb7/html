<?php	


	/* $cat1 = array("cod" => 1, "nombre" => "Comida");
	$cat2 = array("cod" => 2, "nombre" => "Bebida");
	$array = array($cat1, $cat2); */
	include 'bd.php';
	$bd=conexion();
	$categorias=cargar_categorias($bd);
	$json = json_encode($categorias);	
	echo $json;