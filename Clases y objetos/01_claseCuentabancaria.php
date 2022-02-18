<?php

class Cuentabancaria{
    // atributo
public $id ;
public $tipo_de_cuenta;
protected $saldo;
public $movimientos;
public $fecha_movimiento;

    //metodo prinicipal
function __construct( $vr_id, string $vr_tipo_cuenta, float $vr_saldo,$vr_movimientos)
{
   $this->id=$vr_id;
   $this->tipo_de_cuenta=$vr_tipo_cuenta; 
   $this->saldo=$vr_saldo;
   $this->movimientos=$vr_movimientos;
   $this->fecha_movimiento=date('Y-m-d');
}// end_constructor

    
//metodos secundarios
//mostrar informacion de la cuenta
public function getCuentabancaria(){
    $arrayCuentabancaria=Array(
'No. Cuenta:' => $this->id,
'tipo de cuenta:' => $this->tipo_de_cuenta,
'movimiemto:'=>$this->movimientos,
'fecha:' => $this->fecha_movimiento,

    );
    return $arrayCuentabancaria;

}
public function retirar_dinero(float $retiro){
if($this-> saldo>$retiro){
$vr_saldo = $this->saldo;
$vr_saldo = $vr_saldo-$retiro;
$this ->saldo=$vr_saldo;
}else{
    echo"el monto excede el saldo de la cuenta";
}
echo"el valor del retiro:;$retiro "."nuevo saldo:".$this->saldo ;
}
public function getTipocuenta(){
    return $this->tipo_de_cuenta;
}
public function setTipocuenta($cuenta){
    $this->tipo_de_cuenta=$cuenta;
}

}// end clase

?>