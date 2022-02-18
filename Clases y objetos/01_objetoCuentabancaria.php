<?php
require_once('01_claseCuentabancaria.php');
// crear una instancia de la clase cuenta bancaria
$objetoCuentabancaria= new Cuentabancaria(1001,"Ahorro",1050000,"Retiro");
echo $objetoCuentabancaria->id."<br>",
//echo $objetoCuentabancaria->tipo_de_cuenta."<br>";
$objetoCuentabancaria->getCuentabancaria();
print_r('<pre>');
print_r($objetoCuentabancaria);
print_r('</pre>');
echo "<br>"
 $objetoCuentabancaria -> retirar_dinero(1500000.3)."<br>";
echo "tipo de cuenta:".$objetoCuentabancaria->getTipocuenta();
$objetoCuentabancaria-> setTipocuenta("cuenta corriente");
//hay que llamar nuevamente el metodo get
echo"<br>";
echo"Tipo de cuenta:".$objetoCuentabancaria->getTipocuenta();

?>
