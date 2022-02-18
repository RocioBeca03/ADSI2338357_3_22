<?php
class cliente{
    public $cedula ;
    public $nombre;
    protected $email;
    public $fecharegistro;
    public $password;
    function __construct(  int $vr_cedula,string $vr_nombre,$vr_email )
{
    $this->cedula=$vr_cedula;
    $this->nombre=$vr_nombre; 
    $this->email=$vr_email;
    $this->fecharegistro=date('Y,m,d');
    $this->password=rand(6);
}
public function getDatospersonales(){
    $arrayDatos = Array(
        'cedula'=> $this->cedula,
        'nombres'=>$this->nombre,
        'fecha'=>$this->fecharegistro,

    );
    return $arrayDatos;
}
public function getCedula()
{
    
return $this->tipo_de_cuenta;
}
}
?>