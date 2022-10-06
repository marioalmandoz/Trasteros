<?php
include("cn.php");

$email = $_POST["email"];
$clave = $_POST["clave"];

$comprobar = "SELECT DNI FROM usuario WHERE email='$email' AND contraseña='$clave'";

$resultado = mysqli_query($conn, $comprobar);
//echo "<script>alert($resultado)</script>";
if($resultado) {
    echo "<script>alert('se ha identificado el usuario con exito');window.location='/usuarioIdentificado.php'</script>";

    
}else{
    echo "<script>alert('no se puede identificar debido a que la contraseña o el usuario son incorrectos'); window.location='/inicio.php'</script>";
    //echo "<script>alert('se ha identificado el usuario con exito');window.location='/usuarioIdentificado.php'</script>";

}


?>
