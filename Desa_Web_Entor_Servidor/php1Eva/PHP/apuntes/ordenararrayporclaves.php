<?php
    $array = [
        "uno" => 12,
        "dos" => 14,
        "tres" => 14,
        "cuatro" => 25,
        "cinco" => 50
    ];


    // Ordenar claves con ksort  de forma desc
    
    ksort($array);
    foreach ($array as $claves => $valores){
        echo "$claves = $valores\n";
    }

    //Intercambio de claves con los datos con funcion array_flip
    $arrayB=array_flip($array);
    print_r ($arrayB);
    
    
   
    


?>