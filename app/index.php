<?php
ini_set("session.cookie_httponly", True);//httponly flag
//inicio de sesion php
    session_start(); 
    //denegar xframe options
   header('X-Frame-Options: SAMEORIGIN');
   //x content type options
header('X-Content-Type-Options: nosniff');
?>
<?php
//conexion base de datos
include("cn.php");


?>
<?php
//redirigir a la pagina de inicio
header("Location: inicio.php"); 
?>

