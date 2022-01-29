<?php 

 $a = 20; 
 $b = 30; 
 $c = 40; 

$neg = -1; 

$menosb = $b * $neg; 
$oper1 = pow($b,2); 
$oper2 = -4*$a*$c; 
$resta = $oper1-$oper2; 
$raiz = pow($resta,(1/2)); 
$dosa = 2*$a; 

$result1 = ($menosb + $raiz)/$dosa; 
$result2 = ($menosb - $raiz)/$dosa; 
if ($resta>=0){
    echo "tiene solucion"."\n";
}else{
    echo "no tiene solucion";
}



?>