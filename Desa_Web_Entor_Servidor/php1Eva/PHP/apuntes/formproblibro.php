<?php
session_start();
$_SESSION = array();



?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="#" method="POST">
        <input name="nombre" type="text"><br><br>

        <input name="apellido" type="text"><br><br>


        <input type="submit" value="Enviar Datos"><br><br>


    </form>
    <?php

        echo $_POST['nombre']."<br>";
        echo $_POST['apellido']."<br>";
    ?>
</body>

</html>