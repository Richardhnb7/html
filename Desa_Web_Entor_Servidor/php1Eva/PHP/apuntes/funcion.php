<?php
    function compara($texto){
       
        $palabras = explode(" ", $texto);
        $maximo = "a";
        $indice = 0;
        $tamano = count($palabras)-1;
        while ($indice <= $tamano){
            if(strcmp($palabras[$indice],$maximo)>0){
                $maximo=$palabras[$indice];
            }
            $indice++;
        }
        return " La palabra mayor es: ". $maximo;  
        
    }
    
    
    ?>
    