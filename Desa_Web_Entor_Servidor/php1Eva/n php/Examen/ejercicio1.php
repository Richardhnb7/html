<?php
    function numPalabrasyRep($fichero,$repetion){
        //Declaramos el array donde se van aencontrar las palabras
        $arrPal=[];
        //Declaramos  de respuesta
        $respuesta=[];

        fopen($fichero,'r');
        while(!feof($fich)){
            $linea=fgets($fich);
            $arrayPal=explode(",",$linea);
            $palabras=[];
            $contado=0;
            foreach( $arrayPal as $palabra){
                if(in_array($palabra) )
                {
                    foreach($respuesta as $p)
                    if($palabra==$p){

                       $palabras[$p]->setrepeticion(+1);
                        
                    }
                    
                }else{
                    $rep=new Repeticion($palabra,1);
                    array_push($palabras,$rep);
                }
            }

            

            array_push($arrPro,$pro);
        }
        return $respuesta ;
    }
?>
