<?php
include("cn.php");

$email = $_POST["email"];
$clave = $_POST["clave"];

$comprobar = "SELECT DNI FROM usuario WHERE email='$emai' AND contraseña='$clave'";

$resultado = mysqli_fetch_array($conn, $comprobar);
if($resultado) {
    echo "<script>alert('se ha identificado el usuario con exito');window.location='/usuarioIdentificado.php'</script>";

    
}else{
    echo "<script>alert('no se puede identificar debido a que la contrasea o el usuario son incorrectos'); window.location='/inicio.php'</script>";
}


?>
