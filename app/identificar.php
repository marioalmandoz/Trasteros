<?php
include("cn.php");

$email = $_POST["email"];
$clave = $_POST["clave"];

$comprobar = "SELECT * FROM usuario WHERE email= '$email' AND contraseña '$clave' ";

$resultado = mysqli_fetch_array($conn, $comprobar);
if($resultado != null) {
    //echo "<script>alert('se ha registrado el usuario con exito');
    //window.location='/home/mario/cyberseguridad/labo0/docker-lamp/app/usuarioIdentificado.php'</script>";

    echo "<script>alert('no se puedo reistrar'); window.history.go(-1);<script>";
}else{
    //echo "<script>alert('no se puedo reistrar'); window.history.go(-1);<script>";

    echo "<script>alert('se ha registrado el usuario con exito');
    window.location='/home/mario/cyberseguridad/labo0/docker-lamp/app/usuarioIdentificado.php'</script>";
}


?>
