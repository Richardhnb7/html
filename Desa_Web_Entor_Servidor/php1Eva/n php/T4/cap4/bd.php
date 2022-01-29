<?php
function leer_config($nombre, $esquema){
	$config = new DOMDocument();
	$config->load($nombre);
	$res = $config->schemaValidate($esquema);
	if ($res===FALSE){ 
	   throw new InvalidArgumentException("Revise fichero de configuración");
	} 		
	$datos = simplexml_load_file($nombre);	
	$ip = $datos->xpath("//ip");
	$nombre = $datos->xpath("//nombre");
	$usu = $datos->xpath("//usuario");
	$clave = $datos->xpath("//clave");	
	$cad = sprintf("mysql:dbname=%s;host=%s", $nombre[0], $ip[0]);
	$resul = [];
	$resul[] = $cad;
	$resul[] = $usu[0];
	$resul[] = $clave[0];
	return $resul;
}
function conexion(){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	echo $res[0] . $res[1]. $res[2];
	$bd = new PDO($res[0], $res[1], $res[2]);

	return $bd;
}
function agregarrestaurante($bd,$restaurante){
	$sql='insert into restaurantes(correo,clave,pais,cp,ciudad,direccion,rol) values (? ,?, ?, ?, ?, ?, ?);';
	$result = $bd->prepare($sql);

	$correo=$restaurante->getcorreo();
	$clave=$restaurante->getclave();
	$pais=$restaurante->getpais();
	$cp=$restaurante->getcp();
	$ciudad=$restaurante->getciudad();
	$direccion=$restaurante->getdireccion();
	$rol=$restaurante->getrol();
	$result->execute(array($correo,$clave,$pais,$cp,$ciudad,$direccion,$rol));

	//Comprobar errores
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
function agregarrestaurante_compuesto($bd,$contenido){
	$bd->beginTransaction();
	$sql='insert into restaurantes(correo,clave,pais,cp,ciudad,direccion,rol) values (? ,?, ?, ?, ?, ?, ?);';
	foreach($contenido as $clave=>$valor){
		$correo=$valor->getcorreo();
		$clave=$valor->getclave();
		$pais=$valor->getpais();
		$cp=$valor->getcp();
		$ciudad=$valor->getciudad();
		$direccion=$valor->getdireccion();
		$rol=$valor->getrol();
		$ejecucion->execute((array($correo,$clave,$pais,$cp,$ciudad,$direccion,$rol)));
		
	}
	$bd->commit();
}
function comprobarcategoria($bd,$categoria)
{
	$ins="Select * from categorias where codcat ='$categoria' ;";
	$result=$bd->query($ins);
	$num=$result->rowCount();

	echo $num;
	return $num ;
}
function consultar_stock($bd,$cod_pro){
	$ins="Select codprod from productos where codcat ='$cod_pro' ;";
	$result=$bd->query($ins);
	$num=$result->fetchAll();
	return $num[0][0];
}
function actualizar_producto($bd,$contenido){
	foreach($contenido as $key => $value){
		$cod_cat=$value->getcod_cat();
		$cod_pro=$value->getcod_pro();
		$stock=$value->getstock();
		$num=comprobarcategoria($bd,$cod_cat);
		$stock_ant=actualizar_producto($bd,$cod_pro);
		$stocktotal=$stock+$stock_ant;
		if($num<0){
			if($cod_pro>=20){
				$bd->beginTransaction();
			$sql='update into productos(stock)
		 	values(?);';

			$result = $bd->prepare($sql);
        	$result->execute(array($stocktotal));
			$bd->commit();
			}else{
				echo " el producto no tiene un stock mayor a 20";
			}
		}else{
			echo " no existe el codigo de la categoria ";
		}
	}
}
function agregarproducto($bd,$contenido){
	 
	
	foreach ($contenido as $key => $value) {

		$nombre=$value->getNombre();
		$descripcion=$value->getdescripcion();
		$peso=$value->getpeso();
		$stock=$value->getstock();
		$categoria=$value->getcategoria();
		
		$ins="Select codcat from categorias where codcat =$categoria ;";
		$result=$bd->query($ins);
		
		
		if($result->rowCount()>0){
			$bd->beginTransaction();

			$upd='update into productos(nombre,descripcion,peso,stock,categoria)
		 	values(?,?,?,?,?);';

			$result = $bd->prepare($upd);
        	$result->execute(array($nombre,$descripcion,$peso,$stock,$categoria));
			$bd->commit();

			}else{
				echo "No existe ninguna categoria : ".$categoria." <br>";
		
		}
	}
}
function insertar_tabla($bd,$file){
	

}
function comprobar_usuario($nombre, $clave,$bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */
	$ins = "select codRes, correo from restaurantes where correo = '$nombre' 
			and clave = '$clave'";
	$resul = $bd->query($ins);	
	if($resul->rowCount() === 1){		
		return $resul->fetch();		
	}else{
		return FALSE;
	}
}
function cargar_categorias($bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */
	$ins = "select codCat, nombre from categorias";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }
	//si hay 1 o más
	return $resul;	
}
function cargar_categoria($codCat,$bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */
	$ins = "select nombre, descripcion from categorias where codcat = $codCat";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	//si hay 1 o más
	return $resul->fetch();	
}
function cargar_productos_categoria($codCat,$bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */	
	$sql = "select * from productos where categoria  = $codCat";	
	$resul = $bd->query($sql);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	//si hay 1 o más
	return $resul;			
}
// recibe un array de códigos de productos
// devuelve un cursor con los datos de esos productos
function cargar_productos($codigosProductos,$bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */
	$texto_in = implode(",", $codigosProductos);
	$ins = "select * from productos where codProd in($texto_in)";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	return $resul;	
}
function insertar_pedido($carrito, $codRes,$bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */
	$bd->beginTransaction();	
	$hora = date("Y-m-d H:i:s", time());
	// insertar el pedido
	$sql = "insert into pedidos(fecha, enviado, restaurante) 
			values('$hora',0, $codRes)";
	$resul = $bd->query($sql);	
	if (!$resul) {
		return FALSE;
	}
	// coger el id del nuevo pedido para las filas detalle
	$pedido = $bd->lastInsertId();
	// insertar las filas en pedidoproductos
	foreach($carrito as $codProd=>$unidades){
		$sql = "insert into pedidosproductos(Pedido, Producto, Unidades) 
		             values( $pedido, $codProd, $unidades)";			
		 $resul = $bd->query($sql);	
		if (!$resul) {
			$bd->rollback();
			return FALSE;
		}
	}
	$bd->commit();
	return $pedido;
}
