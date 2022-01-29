<?php
// IMPLODE

$array = array('apellido', 'email', 'teléfono');
$separado_por_comas = implode(",", $array);
echo $separado_por_comas; // apellido,email,teléfono
echo "<br>";

// Devuelve un string vacio si se usa un array vacio

var_dump(implode('hola', array())); //string 0