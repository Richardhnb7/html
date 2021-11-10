<?php
class Persona{
    private $DNI;
    private $nombre;
    private $apellido;
    function __construct ($DNI, $nombre,$apellido){
        $this ->DNI = $DNI;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }
    public function setApellido($apellido){
        $this -> apellido = $apellido;
    }
    public function getDNI(){
        return $this->DNI;
    }
    public function setDNI($DNI){
        $this -> DNI = $DNI;
    }
    public function __toString(){
        return "Persona: ".$this->DNI.$this->nombre." ".$this->apellido." ";
    }
}
class Cliente extends Persona
{
    private $saldo =0;
    function __construct($DNI, $nombre,$apellido,$saldo){
        parent::__construct($DNI, $nombre,$apellido);
        $this -> $saldo =$saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this -> saldo = $saldo;
    }
    public function __toString(){
        return "Clinete: ".$this->getNombre();
    }




}
$cli =new Cliente ("22222a","pedro","sales",210);
//$per =new Persona("111111A", "Ana", "Puertas");
echo $cli."<br>";
//$per-> setApellido("Montes");
//echo $per."<br>";
?>