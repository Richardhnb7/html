<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $numero3 = $_GET['numero3'];

    

    $suma = pow($numero1,2) + pow($numero2,2) + pow($numero3,2);
    echo $suma; 
    
    
    $resta = $numero1 - $numero2 - $numero3;

    if ($numero1 > $numero2 && $numero1 > $numero3){
        echo $numero1;
    }else{
        if ($numero2 > $numero1 && $numero2 > $numero3){
            echo $numero2;
        } else{
            echo $numero3;
        }
    }

    

    

    
       
?>