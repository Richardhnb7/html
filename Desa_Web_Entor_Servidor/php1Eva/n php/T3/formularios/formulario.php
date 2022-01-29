<?php
    session_start();
    if ($_SERVER("REQUEST_METHOD")=="POST") {
        $_SESSION['posicion_num']=$_POST['posicion'];
        header("Location: resolver.php");
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
	</head>
	<body>			
		
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
							
			<label for="posicion">En que posicion buscar</label>
            <input value="<?php if(isset($numero))echo $numero;?>" type="text" name="posicion" id="posicion">
						
			
			<input type = "submit">
		</form>
	</body>
</html>