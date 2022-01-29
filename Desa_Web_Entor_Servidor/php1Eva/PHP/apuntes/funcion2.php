<?php
    function manejadorErrores($errno, $str, $file, $sline){
        echo "ocurrio el error: $errno";

    }

    set_error_handler("manejadorErrores");
    $a = $b;