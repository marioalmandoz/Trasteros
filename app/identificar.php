<?php
session_start();
include("cn.php");

$email = $_POST["email"];
$clave = $_POST["clave"];


$comprobar = "SELECT nombre FROM usuarios WHERE email='$email' AND clave='$clave'";
$resultado = mysqli_query($conn, $comprobar);
//echo "<script>alert($resultado)</script>";
if($resultado) {
    echo "<script>alert('se ha identificado el usuario con exito');window.location='/usuarioIdentificado.php'</script>";
    $info = mysqli_fetch_field_direct($resultado, 1);
    $_SESSION['nombre']=$info->usuario;
    
}else{
    echo "<script>alert('$resultado no se puede identificar debido a que la contraseña o el usuario son incorrectos'); window.location='/inicio.php'</script>";
    //echo "<script>alert('se ha identificado el usuario con exito');window.location='/usuarioIdentificado.php'</script>";

}


?>
