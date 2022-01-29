<?php

    function numero_palab($nombre_fichero){
        $fichero_texto = fopen ($nombre_fichero, "r");
        $contenido_fichero = fread($fichero_texto, filesize($nombre_fichero));
        $array = explode ( ' ', $contenido_fichero );
        $numero_de_palabras=count(explode(" ", $contenido_fichero));


}


?>