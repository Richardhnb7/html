<?php
/* Iniciar una transacción, desactivando 'autocommit' */
$gbd->beginTransaction();

/* Insertar múltiples registros según "todo o nada" */
$sql = 'INSERT INTO fruit
    (name, colour, calories)
    VALUES (?, ?, ?)';

$gsent = $gbd->prepare($sql);

foreach ($frutas as $fruta) {
    $gsent->execute(array(
        $fruta->name,
        $fruta->colour,
        $fruta->calories,
    ));
}

/* Consignar los cambios */
$gbd->commit();

/* La conexión a la base de datos ahora a vuelto al modo 'autocommit' */
?>
