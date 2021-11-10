<?php
if (!isset($_COOKIE[´$visitas´])) {//si no existe
    setcookie(`visitas`,`1`,time() +3600*24);
    echo"bienbenido por primera vez";
}else {//si existe
    $visitas = (int) $_COOKIE(`visitas`);
    $visitas++;// se reeescribe incrementada
    setcookie(`visitas`,`1`,time() +3600*24);
    echo"bienbenido por $visitas vez";
}


?