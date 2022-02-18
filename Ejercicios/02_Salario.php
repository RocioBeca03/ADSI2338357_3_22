<?php

//nombres, documento,salario,fecha_ingreso
//dias trabajados-salario minimo
$vr_nombres='Rocio Beca';
echo $vr_nombres;
$vr_documento=1002968889;
$vr_fecha_ingreso=date('y-m-d');
$vr_salario=1000000;
$vr_dias_trabajados=27;
$vr_dia_salario=$vr_Salario/30;
$vr_Calcular_Salario=$vr_dia_salario*$vr_dias_trabajados;
echo"su salario es de:".number_format($vr_Calcular_Salario,2);
echo"<br>";
if($vr_salario==1000000){
echo " prestamo es de :$5.000.000.00";
}elseif($vr_salario==2000000){
    echo" su prestamo es de: 7.000.000.oo";
}

   

?>