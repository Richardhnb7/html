<?php

class  Persona
{
    private $DNI;
    private $nombre;
    private $apellido;
    function __construct($DNI, $nombre, $apellido)
    {
        $this->DNI = $DNI;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }

    public function getDNI()
    {
        return $this->DNI;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setDNI($DNI)
    {
        $this->DNI = $DNI;
    }

    public function __toString()
    {
        return "Persona: " . $this->nombre . " " . $this->apellido . " " . $this->DNI;
    }
}
//crear una persona
$per = new Persona("111111A", "Ana", "Puertas");
//mostrarla, usa el método __tostring()


class Cliente extends Persona
{
    private $saldo = 0;
    function __construct($DNI, $nombre, $apellido, $saldo)
    {
        parent::__construct($DNI, $nombre, $apellido);
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function __toString()
    {
        return "Cliente: " . $this->getNombre();
    }
}
$per->setApellido("Montes");
echo $per . "\n";
$cli = new Cliente("2222245AA", "Pedro", "Sales", 100);
