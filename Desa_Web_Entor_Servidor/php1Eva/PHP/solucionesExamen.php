<?php
function primer_ejercicio02_12_21($fichero,Repeticiones){
    //Repeticiones = clase repeticiones
    //constructor y su set y get respectivamente
    $nuevo_array = new Array();
    while(!eof($fich)){
        $linea = fgets($fich);
        $palabras = explode (' ',$linea); //suponiendo que el separador de cada palabra es el espacio
        $longitud_linea = count($palabras)-1;
        $indice = 0;
        while($indice <=$longitud_linea){
            $pal = $palabras[$indice];
            if(empty($nuevo_array)){
                $dato = new Repeticiones ($pal,1);
                $nuevo_array[0]=dato;
            }else{
                //nuevo array no est avacio y tendremos que buscar e nel array si la pal existe en el array o no
                $contador = 0;
                $lon_array_nuevo=count($nuevo_array)-1;
                while($contador<=$long_array_nuevo && $nuevo_array_nuevo[$contador]!=$pal){
                    $contador++;
                }
                if($contador > $long){ //Una nueva palabra se debe introducir en el nuevo array nuevo.
                    $dato = new Repeticiones ($pal,1);
                    $nuevo_array[$contador]=$dato;
                }else{
                    $repe=$nuevo_array[$contador]->getCantidad();
                    $repe++;
                    $nuevo_array[$contador]->putCantidad($repe);
                }
                $indice++;
            }
        }
    }
    return $nuevo_array;
}

function solucion_segundo_ejercicio02_12_21($bd,$a,$b){
    $sql = "select * from productos where stock between $a and $b";
    $resul = $bd -> query($sql);
    return $resul;
}

function solucion_tercer_ejercicio02_12_21($fich, $bd){
    $nuevo_array = new Array();
  //  $sql = "select * from productos";
   // $resultado = $bd -> query($sql);
    while(!eof($fich)){
        $sql = "select * from productos";
        $resultado = $bd -> query($sql);
        $linea = fgets($fich);
        $palabras = explode (' ',$linea); //suponiendo que el separador de cada palabra es el espacio
        $indice = 0;
        $codigo = $palabra[$indice];
        $j=0;
        while($rows = mysql_fetch_array($resultado)){
            if($codigo == $rows[0]){
                $nuevo_array[$j] = $codigo;
                $j++;
            }
      
        }
    }
    return $nuevo_array;

}