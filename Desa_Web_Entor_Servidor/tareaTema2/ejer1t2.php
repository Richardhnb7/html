<?php
$a = 1; 
$b = 1; 
$c = 1; 

$neg = -1; 

$menosb = $b * $neg; 
$oper1 = pow($b,2); 
$oper2 = 4*$a*$c; 
$resta = $oper1-$oper2; 
$raiz = pow($resta,(1/2)); 
$dosa = 2*$a; 

$re_positivo = ($menosb + $raiz)/$dosa; 
$re_negativo = ($menosb - $raiz)/$dosa; 
if ($resta>=0) {
    echo "soluciones:<br>";
    echo"solucion con la resta = $re_positivo<br>"; 
    echo"solucion con la suma = $re_negativo";
}else {
    echo" no tiene una solucion que este dentro de los reales";
}
  

?>