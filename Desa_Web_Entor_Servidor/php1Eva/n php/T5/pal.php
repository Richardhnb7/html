<?php
class Palabra{
    private $palabra;
    private $repeticion;
    

    function __construct($palabra,$repeticion){
        $this->palabra=$palabra;
        $this->repeticion=$repeticion;
    }
    function getpalabra(){
        return $this->palabra;
    }
    function getrepeticion(){
        return $this->repeticion;
    }
    
    function setpalabra($palabra){
        $this->palabra=$palabra;
   }
   function setrepeticion($repeticion){
        $this->repeticion=$repeticion;
   }
 
    function  __toString(){
        return "Producto : ".$this->palabra." ".$this->repeticion;
        }
}
?>


?>