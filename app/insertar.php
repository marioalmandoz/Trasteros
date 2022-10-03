<?php
include("cn.php");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$telefono = $_POST["telefono"];
$fechaN = $_POST["fechaN"];
$email = $_POST["email"];
$clave = $_POST["clave"];

$insertar = "INSERT INTO usuario(nombre, apellido, DNI, telefono, fechaN, email, contraseña) VALUES ('$nombre', '$apellidos', '$dni', '$telefono', '$fechaN', '$email', '$clave')";

$resultado = mysqli_query($conn, $insertar);
if($resultado) {
    echo "<script>alert('se ha registrado el usuario con exito');
    window.location='/usuarioIdentificado.php'</script>";
}else{
    echo "<script>alert('no se puede registrar'); window.history.go(-1);<script>";
}


?>