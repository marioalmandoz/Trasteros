<?php//inicio de sesion php
    session_start(); 
?>
<?php//conexion base de datos
include("cn.php");


?>
<?php//redirigir a la pagina de inicio
header("Location: inicio.php"); 
?>

