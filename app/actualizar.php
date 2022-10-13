<?php
include("cn.php");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$telefono = $_POST["telefono"];
$fechaN = $_POST["fechaN"];
$email = $_POST["email"];
$clave = $_POST["clave"];

$actualizar = "UPDATE usuario SET nombre='$nombre', apellido='$apellidos', DNI='$dni', telefono= '$telefono', fechaN='$fechaN', email='$email', contraseña='$clave' where email='' ";
$resultado = mysqli_fetch_array($conn, $actualizar);
if($resultado) {
    echo "<script>alert('Se han modificado los datos del usuario con exito');window.location='/usuarioIdentificado.php'</script>";

    
}else{
    echo "<script>alert('No se han podido modificar los datos del usuario'); window.location='/inicio.php'</script>";
}

?>