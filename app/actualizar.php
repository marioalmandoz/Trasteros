<?php
ini_set("session.cookie_httponly", True);//httponly flag
session_start();
//denegar xframe options
header('X-Frame-Options: DENY');

include("cn.php");

//obtener los datos del formulario
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$telefono = $_POST["telefono"];
$fechaN = $_POST["fechaN"];
$email = $_POST["email"];
$clave = $_POST["clave"];
$email_Registro = $_SESSION['email'];

//hacer operacion sql
$actualizar = "UPDATE Usuario SET nombre='$nombre', apellido='$apellidos', DNI='$dni', telefono= '$telefono', fechaN='$fechaN', email='$email', clave='$clave' WHERE email='$email_Registro'";
$resultado = mysqli_query($conn, $actualizar);
if($resultado) {
    //si el resultado es correcto actualizar la variable de sesion
    $_SESSION['nombre']=$nombre;
    $_SESSION['apellido']=$apellidos;
    $_SESSION['DNI']=$dni;
    $_SESSION['telefono']=$telefono;
    $_SESSION['fechaN']=$fechaN;
    $_SESSION['email']=$email;
    $_SESSION['clave']=$clave;
    echo "<script>alert('Se han modificado los datos del usuario con exito');window.location='/usuarioIdentificado.php'</script>";
}else{
    //operacion incorrecta
    echo "<script>alert('No se han podido modificar los datos del usuario'); window.location='/inicio.php'</script>";
}

?>