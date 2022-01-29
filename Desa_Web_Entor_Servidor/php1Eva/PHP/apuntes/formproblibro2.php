<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Fecha:
        <input type="text" value="<?php echo date("Y-m-d"); ?>" disabled>
        <input type="text" name="info[fecha]" value="<?php echo date("Y-m-d"); ?>" hidden>
        <br>
        Concepto:
        <input type="text" name="info[concepto]" required>
        <br>
        Cantidad:
        <input type="number" name="info[cantidad]" required>
        <br>
        Saldo:
        <input type="text" name="info[saldo]" required>
        <br>
        <input type="submit" value="enviar">
    </form>
    <?php
    //comprueba si la variable info es creada si es que el formulario es enviado
    if (isset($_POST['info'])) {
        $array = $_POST['info'];
        $fecha = $array["fecha"];
        $concepto = $array["concepto"];
        $cantidad = $array["cantidad"];
        $saldo = $array["saldo"];
        echo "Los valores obtenidos en el formulario son:<br>Fecha:" . $fecha . "<br>Concepto:" . $concepto . "<br>Cantidad:" . $cantidad . "<br>Saldo:" . $saldo . "";
    }
    ?>

</body>

</html>