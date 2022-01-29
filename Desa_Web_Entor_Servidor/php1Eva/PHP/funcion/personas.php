<?php
session_start();
require_once("persona.php");
/* si va bien redirige a principal.php si va mal, mensaje de error */
if ($_SERVER["REQUEST_METHOD"] == "POST") {  	
	if($_POST['dni']!=0){	
        if (!isset($_SESSION['indice'])){
            $i=0;
            
            $_SESSION['dni'.$i]=$_POST['dni'];
            $_SESSION['indice']=$i;
        }	
		
	}else{
		$i = $_SESSION['indice'];
        $i++;
        $_SESSION['numero'.$i] = $_POST['dni'];
        $_SESSION['indice'] = $i;
	}	

} else {
    header("Location: resolver3.php");
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
			<label for = "nombre">nombre</label> 
			<input value = "<?php if(isset($nombre))echo $nombre;?>"
			id = "nombre" name = "nombre" type = "text">				
			
            <label for = "apellido">apellido</label> 
			<input value = "<?php if(isset($apellido))echo $apellido;?>"
			id = "apellido" name = "apellido" type = "text">				
			
			<label for = "dni">dni</label> 
			<input id = "dni" name = "dni" type = "text">			
			
			<input type = "submit">
		</form>
	</body>
</html>