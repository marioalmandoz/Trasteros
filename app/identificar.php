<?php
session_start();
include("cn.php");

$email = $_POST["email"];
$clave = $_POST["clave"];

$comprobar = "SELECT * FROM Usuario WHERE email='$email' AND clave='$clave'";

$resultado = mysqli_query($conn, $comprobar);
//echo "<script>alert($resultado)</script>";
if($resultado) {
    echo "<script>alert('se ha identificado el usuario con exito');window.location='/usuarioIdentificado.php'</script>";
    $usuario = mysqli_fetch_array($resultado);
    $_SESSION['nombre']=$usuario["nombre"];
    $_SESSION['apellido']=$usuario["apellido"];
    $_SESSION['DNI']=$usuario["DNI"];
    $_SESSION['telefono']=$usuario["telefono"];
    $_SESSION['fechaN']=$usuario["fechaN"];
    $_SESSION['email']=$usuario["email"];
    $_SESSION['clave']=$usuario["clave"];
}else{
    echo "<script>alert('no se puede identificar debido a que la contraseña o el usuario son incorrectos'); window.location='/inicio.php'</script>";
    //echo "<script>alert('se ha identificado el usuario con exito');window.location='/usuarioIdentificado.php'</script>";

}


?>
