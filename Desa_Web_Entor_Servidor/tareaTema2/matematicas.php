<?php
    function ecuacion ($a,$b,$c){
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
            $array= array($re_negativo,$re_negativo);
            return $array;
        }else {
            $var=false;
            return $var;
        } 
    }
?>
