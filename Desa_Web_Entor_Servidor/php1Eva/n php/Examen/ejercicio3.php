<?php
    function comprobarProductos($fichero,$bd){
        fopen($fichero,'r');
        while(!feof($fich)){
            $linea=fgets($fich);
            $arrayPal=explode(",",$linea);

            $pro=new Producto($array[0],$array[1],$array[2],$array[3],$array[4],$array[4]);

            $ins="Select * from categorias where codpro=$pro[0]  ;";
	        $result=$bd->query($ins);
	        $num=$result->rowCount();
            if($num<0){
                array_push($arrPro,$pro);
            } 
        }
        return $arrPro;
        fclose($fich);
            
    }
?>