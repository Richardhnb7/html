<?php
    include 'matematicas.php';
    $a=1;
    $b=3;
    $c=2;

    $respuesta=resolverEcua_grado2($a,$b,$c);
    gettype($respuesta);

    if (is_array($respuesta)) {
      print_r($respuesta);  
    }else {
       echo $respuesta; 
    }
    
    
?>