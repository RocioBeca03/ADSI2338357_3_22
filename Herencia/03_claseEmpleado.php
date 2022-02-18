<?php
require_once("02_claseCliente.php");
class Empleado extends cliente{
    private $salario;
    public function __construct($vr_cedula,$vr_nombre,$vr_edad,$vr_credito,$vr_salario){
        parent::__construct($vr_cedula,$vr_nombre,$vr_edad,$vr_credito);
    }
    public function getSalario(){
        return $this->salario;

    }
    public function setSalario($vr_salario){
        $this->salario=$vr_salario;
    }
}
?>