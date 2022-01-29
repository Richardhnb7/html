<?php
/* si va bien redirige a principal.php si va mal, mensaje de error */
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {  	
	if($_POST['usuario'] === "usuario" and $_POST["clave"] === "1234"){		
		header("Location: principal.php");
	}else{
		$err = true;
	}	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
	</head>
	<body>			
		<?php if(isset($err)){
			echo "<p> Revise usuario y contraseña</p>";
		}?>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "usuario">Usuario</label> 
			<input value = "<?php if(isset($usuario))echo $usuario;?>"
			id = "usuario" name = "usuario" type = "text">				
			
			<label for = "clave">Clave</label> 
			<input id = "clave" name = "clave" type = "password">			
			
			<input type = "submit">
		</form>
	</body>
</html>*/

$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';
try{
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexion realizada con exito";
    $sql = 'SELECT nombre,clave,rol FROM usuarios';
    $usuarios  = $bd-> query($sql);
    echo $usuarios -> rowCount(). "<br>";
    foreach ($usuarios as $row) {
        print $row['nombre']."\t";
        print $row['clave']."\t";
    }
}
