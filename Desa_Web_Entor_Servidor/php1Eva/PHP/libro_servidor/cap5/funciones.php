<?php
    function conexion($localhost,$base_datos,$usuario,$clave){
       $mysqli= new mysqli($localhost,$usuario,$clave,$base_datos);
        return $mysqli;
    }
    function cargar_categorias($bd){
       
        $ins = "select codCat, nombre from categorias";
        $resul = $bd->query($ins);	
        
        return $resul;	
    }

?>