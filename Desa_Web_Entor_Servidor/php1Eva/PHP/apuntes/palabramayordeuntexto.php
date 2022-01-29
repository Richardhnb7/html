<?php

$texto="estoy en clase de aplicaciones web en el servidor";
$palabras=explode(" ",$texto);
function mayor_array($palabras){
    $mayor="a";
    $i=0;
    $tamano=count($palabras)-1;
    while ($i<=$tamano){
        if(strcmp($palabras[$i],$mayor)>0){
            $mayor = $palabras[$i];
            $pos=$i;
        }
        $i++;
    }
    return $pos;
}

function intercambio($arra,$posicion){
    
    

    $lon=count($arra)-1;
    $auxiliar=$arra[$posicion]; 
    $ul=$arra[$lon];
    $arra[$posicion]=$ul;
    $arra[$lon]=$auxiliar;
    return $arra;
}

$posicion=mayor_array($palabras);
$palabras=intercambio($palabras,$posicion);
foreach($palabras as $pos){
    echo $pos." ";
}

?>