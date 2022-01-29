<?php

palarasArray('palabras.txt');


function palarasArray($fichero){
    $arrPa=[];
    $fich=fopen($fichero,"r");
    $contador=0;
    $auxContador=0;
    while(!feof($fich)){
        $linea=fgets($fich);
        $array=explode(",",$linea);
        while($contador<=count($array)){
            $auxContador=0;
            if(isset($array[$contador])){
                $pal=new Palabra($array[$contador],1);
                array_push($arrPa,$pal);
                
            }else{

                while($auxContador<=count($arrPa)){
                    if($arrPa[$auxContador]== $auxContador[$contador]){
                        $arrPa[$auxContador]=$arrPa[$auxContador],
                    }
                }
            }
            

            $contador++;
        }
        print_r($array);
    }
    return $arrPro;
    fclose($fich);
}

?>