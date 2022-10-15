<?php 
//iniciar sesion y conectarse
session_start();
include("cn.php");
//obtener datos formulario
$email = $_POST["email"];
$clave = $_POST["clave"];

//select
$comprobar = "SELECT * FROM Usuario WHERE email='$email' AND clave='$clave'";

$resultado = mysqli_query($conn, $comprobar);
//obtener el nombre del usuario del resultado
$usuario = mysqli_fetch_array($resultado);
$nombre=$usuario["nombre"];

if(strlen($nombre)>0) {
    //si existe
    echo "<script>alert('Se ha identificado el usuario con éxito.');window.location='/usuarioIdentificado.php'</script>";
    //guardar los datos del usuario en la variable de sesion
    $_SESSION['nombre']=$usuario["nombre"];
    $_SESSION['apellido']=$usuario["apellido"];
    $_SESSION['DNI']=$usuario["DNI"];
    $_SESSION['telefono']=$usuario["telefono"];
    $_SESSION['fechaN']=$usuario["fechaN"];
    $_SESSION['email']=$usuario["email"];
    $_SESSION['clave']=$usuario["clave"];
}else{
    //si no existe
    echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); window.location='/inicio.php'</script>";
    //echo "<script>alert('se ha identificado el usuario con exito');window.location='/usuarioIdentificado.php'</script>";

}


?>
