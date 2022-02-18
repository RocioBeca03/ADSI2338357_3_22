<?php
class Persona{
    private $cedula;
    public $nombre;
    public $edad;

    public function __construct($vr_cedula,string $vr_nombre,$vr_edad)
    
    {
$this->cedula=$vr_cedula;
$this->nombre=$vr_nombre;
$this->edad=$vr_edad;

    }
    //mostrar la informacion del atributo protegido
     public function getCedula(){
         return $this->cedula;
     }
     //volver a asignar la informacion de un atributo
     public function setCedula($vrcedula){
         $this->cedula=$vrcedula;
         
     }
       public function getDatospersonales()
       {
         $arrayDatospersonales=array(
            'Cédula: ' => $this -> cédula ,
            'Nombres:' => $this -> nombres ,
            'Email: ' => $this -> edad , 
         );
         return $arrayDatospersonales;
       }
    }
  ?> 