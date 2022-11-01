<?php
//conexion base da datos
include("cn.php");
//obtener datos de formulario
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$telefono = $_POST["telefono"];
$fechaN = $_POST["fechaN"];
$email = $_POST["email"];
$clave = $_POST["clave"]; 
$clave= password_hash($clave,PASSWORD_DEFAULT);
 
//sql
$insertar = "INSERT INTO Usuario(nombre, apellido, DNI, telefono, fechaN, email, clave) VALUES ('$nombre', '$apellidos', '$dni', '$telefono', '$fechaN', '$email', '$clave')";

$resultado = mysqli_query($conn, $insertar);
if($resultado) {
    //operecion correcta
    echo "<script>alert('se ha registrado el usuario con exito');
    window.location='/usuarioIdentificado.php'</script>";
}else{
    //operacion incorrecta
    echo "SQL Error: " . mysqli_error($conn);
    //echo "<script>alert('no se puede registrar'); window.history.go(-1);</script>";
}


?>