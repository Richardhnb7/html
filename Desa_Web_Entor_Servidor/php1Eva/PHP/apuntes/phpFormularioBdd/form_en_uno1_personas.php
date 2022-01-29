 <?php
require_once("persona.php");
session_start();
/* si va bien redirige a principal.php si va mal, mensaje de error */
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST['dni'] !=0){
        if (!isset($_SESSION['indice'])){
            $i=0;
            $dni=$_POST['dni'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            echo "valor de ".$i;
            $per=new Persona($dni,$nombre,$apellido);
            $_SESSION['per'.$i]=$per;
            $_SESSION['indice']=$i;
        }
        else{
            $dni=$_POST['dni'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $per=new Persona($dni,$nombre,$apellido);
            $i=$_SESSION['indice'];
            $i++;
            $_SESSION['per'.$i]=$per;
            
            $_SESSION['indice']=$i;
            
        }
    }
    else{
    header("Location: resolver_persona.php");
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
		
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "dni">Dni</label> 
			<input value = "<?php if(isset($dni))echo $dni;?>"
			id = "dni" name = "dni" type = "text">	
            <label for = "nombre">nombre</label> 
			<input value = "<?php if(isset($nombre))echo $nombre;?>"
			id = "nombre" name = "nombre" type = "text">
            <label for = "apellido">apellido</label> 
			<input value = "<?php if(isset($nombre))echo $nombre;?>"
			id = "apellido" name = "apellido" type = "text">					
			
						
			
			<input type = "submit">
		</form>
	</body>
</html>
