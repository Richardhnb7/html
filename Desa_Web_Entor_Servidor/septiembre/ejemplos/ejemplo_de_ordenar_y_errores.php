<?php
   /* $array= {
        "uno"=>12,
        "dos" => 14,
        "tres"=>14,   
        "cuatro"=>25,
        "cinco"=>50;
    }
//coje lasclavees y las ord;ena de forma descanedente
    ksort($array);
    foreach ($array as $claves => $valores) {
        echo "$claves =$valores\n"
    }
*/
function manejadorErrores($errno,$atr,$file,$line){
    echo "ocurrio el error: $errno";
}
set_error_handler("manejadorErrorres");
$a=$b;

?>