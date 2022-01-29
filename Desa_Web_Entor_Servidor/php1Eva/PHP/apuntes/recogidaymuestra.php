<?php
session_start();
include("formproblibro.php");
$_SESSION=['array'];

echo $nombre;
echo $apellido;

session_destroy();