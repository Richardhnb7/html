<?php
    function Inicializada_Y_NoNul($var){
        $resultado=isset($var);
        return $resultado;
    }
    function SiEsNull($var){
        $resultado=is_null($var);
        return $resultado;
    } 
    function TipoDeDato($var){
        $resultado=is_int($var);
        return $resultado;
    } 
    function CambioTipoDeDato($var){
        $resultado=intval($var);
        return $resultado;
    } 
    function LongitudCadena($cad){
        $resultado=strlen($cad);
        return $resultado;
    } 
    function ArrayDeCadenas($cad,$token){
        $resultado=explode($cad,$token);
        return $resultado;
    } 
    function CambioDeArrayACadena($cad,$token){
        $resultado=implode($token,$cad);
        return $resultado;
    }
    function ComparacionDeCadenas($cad,$cad2){
        $resultado=strcmp($cad,$cad2);
        if ($resultado ==-1) {
            return "la $cad es de menor longitud que $ad2";
        } elseif ($resultado == 0) {
            return "las cadenas soon iguales";
        } else {
            return "la $cad es de mayor longitud que $ad2";
        
        }
    }

?>