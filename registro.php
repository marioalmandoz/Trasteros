<?php

//Recibo los datos del formlario
$nombre=$_POST['nombre'];
$clave=$_POST['clave'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];
$fecha=$_POST['fecha'];
$email=$_POST['email'];

echo "los datos son los siguientes: <br>";
echo "$nombre, $clave, $dni, $telefono, $fecha y $email";

?>