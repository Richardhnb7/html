<?php
    function productosStock($entre,$productos){ 
        $bd->beginTransaction();
        $sql="Select * from productos where stock=< $entre";
        $result = $bd->query($sql);	
        //Declaracion de array productos
        $productos=[];
        foreach($result as $row){
            $pro=new Producto($row['nombre'],$row['descripcion'],$row['peso'],$row['stock'],$row['categoria']);
            array_push($productos,$pro);
        }
        return  $productos;
    }
?>
