<?php
session_start();
if ($_REQUEST['color'] == 'color' ){
  setcookie('color',$_POST['color'], time() + 60 * 60 * 24 * 365);
}
?>
<html>

<head>
  <title>Color fondo</title>
</head>

<body>
  Se creó la cookie.
  <br>
  <a href="pagina1.php">Ir a pagina 1</a>
</body>

</html>