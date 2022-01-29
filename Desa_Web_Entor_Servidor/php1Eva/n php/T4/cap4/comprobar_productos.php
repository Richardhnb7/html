<?php
    require_once("producto.php");
    require_once('bd.php');
    require_once ('sesiones.php');

    

    session_start();
    $bd=conexion();
    
    
    
    $ar=datos_productos("producto.txt");
    $base=datos_bbdd_productos($bd); 
    print_r($ar);

    function datos_bbdd_productos($bd){
        if($bd){
            echo 'La conexion ha sido un exito';
        }

        $arrPro=[];
        $preparada=$bd->prepare('Select nombre,descripcion,peso,stock,categoria from productos');
        $result=$preparada->execute();
        print_r($result);
        //$query='Select nombre,descripcion,peso,stock,categoria from productos';
        //$result =mysqli_query($bd,$query);
        
        while ($row = fetch_all($result)){
        $pro=new Producto($row['nombre'],$row['descripcion'],$row['peso'],$row['stock'],$row['categoria']);
        print_r($row['nombre']);
        array_push($arrPro,$pro);
        }
            
        return $arrPro;
    }
    function datos_productos($fichero){
        $arrPro=[];
        $fich=fopen($fichero,"r");
        while(!feof($fich)){
            $linea=fgets($fich);
            $array=explode(",",$linea);
            
            $pro=new Producto($array[0],$array[1],$array[2],$array[3],$array[4]);

            array_push($arrPro,$pro);
        }
        return $arrPro;
        fclose($fich);
    }
    print_r($base);
?>