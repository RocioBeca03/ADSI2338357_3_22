<?php
require_once("01_clasePersona.php");
require_once("02_claseCliente.php");
//instancia de la clase persona
$objPersona=new Persona(20010030,"Andrea Ruiz",32);
echo"<h2> llamado a la clase persona </h2><br>";
echo "cedula de la persona:".$objPersona->getCedula();
echo "nombres:".$objPersona->nombre."<br>";
$objPersona->setCedula(30010020);
echo"cedula de la persona:";
//instancia de la clase cliente
$objCliente = new cliente (21890100,"Juana Paz", 23, 235800000);
echo"<h2> llamado a la clase Cliente </h2><br>";
echo "cedula:". $objCliente-> getCedula()."<br>";

?>