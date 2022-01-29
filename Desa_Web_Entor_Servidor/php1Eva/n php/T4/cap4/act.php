<?php
    class Actualiza{
        private $stock;
        private $cod_cat;
        private $cod_pro;

        function __construct($cod_pro,$stock,$cod_cat){
            $this->cod_pro=$cod_pro;
            $this->stock=$stock;
            $this->cos_cat=$cod_cat;
        }
        function getstock(){
            return $this->stock;
        }
        function getcod_cat(){
            return $this->cod_cat;
        }
        function getcod_pro(){
            return $this->cod_pro;
        }
        function setstock($stock){
            $this->stock=$stock;
        }
        function setcod_cat($cod_cat){
                $this->cod_cat=$cod_cat;
        }
        function setcodpro($cod_pro){
            $this->cod_pro=$cod_pro;
        }
    
    }
?>