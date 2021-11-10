clases.php
<?php
class Restaruante{
    private $correo;
    private $clave;
    private  $pais;
    private $cp;
    private $ciudad;
    private $direccion;
    private $rol;
}
function __construct($correo,$clave,$pais,$ciudad,$direccion,$rol){
    $this->correo=$correo;
    $this->clave=$clave;
    $this->pais=$pais;
    $this->ciudad=$ciudad
    $this->direccion=$direccion;

}
?>