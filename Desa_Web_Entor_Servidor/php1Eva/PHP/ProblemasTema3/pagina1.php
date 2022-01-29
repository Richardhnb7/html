<?php
session_start();
$color = "";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <style>
      body{
        background-color: <?php echo $_COOKIE['color'] ?>">

      }
    </style>

 
</head>
<body >

  <form action="pagina2.php" method="POST">
    Deslice hasta conseguir el color deseado: <br>
    
    <input type="color" value="color" name="color">Color<br>
    
    <input type="submit" value="Enviar color">
  </form>
</body>

  
</body>
</html>

