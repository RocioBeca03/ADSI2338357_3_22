<?php
require_once("01_clasePersona.php");
class cliente extends persona{
    private $credito;
   public function __construct($vr_cedula,string $vr_nombre,$vr_edad,$vr_credito)
   {
    //envio los atributos se asignan a la clase persona   
parent::__construct($vr_cedula,$vr_nombre,$vr_edad,);
$this->credito=$vr_credito;
   } 
}
?>