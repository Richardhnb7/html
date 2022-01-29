<?php
if(isset($_POST["enviar"]))
{
$nombre = $_POST["color"];
setcookie("color", $color, time() + 30*24*60*60); //guardamos la cookie

echo "El valor de la cookie fondo es: " . $_COOKIE["color"]; //imprimimos el valor 
}
?>
<html>
<body style="background-color: <?php echo $_COOKIE['color'] ?>">
    <form action="formulario.php" method="post">
        <label for="color">Elige el color del que quieres la pagina web:</label><br>
        <input type="color" id="color" name="color"><br>

        <input type="submit">
    </form>
</body>
</html>