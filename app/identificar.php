<?php 
//iniciar sesion y conectarse
session_start();
include("cn.php");
//obtener datos formulario
$email = $_POST["email"];
$clave = $_POST["clave"];

//select
//crear consulta parametrizada
//preparar
if (!($sentencia = $conn->prepare("SELECT * FROM Usuario WHERE email = ? AND clave = ? "))) {
    echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
}

//comprobar parametros
if (!$sentencia->bind_param("ss", $email, $clave)) {
    echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
}
//ejecutar
if (!$sentencia->execute()) {
    echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); window.location='/inicio.php'</script>";

}else {//la ejecuacion es correcta

    //comprobar si existe un usuario con ese mail y contraseña
    $sentencia-> bind_result($nombre, $apellido, $DNI, $telefono, $fechaN, $email, $clave);
    $sentencia->fetch();
    
    if(strlen($nombre)>0) {
        //si existe
        echo "<script>alert('Se ha identificado el usuario con éxito.');window.location='/usuarioIdentificado.php'</script>";
        //guardar los datos del usuario en la variable de sesion
        $_SESSION['nombre']=$nombre;
        $_SESSION['apellido']=$apellido;
        $_SESSION['DNI']=$DNI;
        $_SESSION['telefono']=$telefono;
        $_SESSION['fechaN']=$fechaN;
        $_SESSION['email']=$email;
        $_SESSION['clave']=$clave;
    }else{
        //si no existe
        echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); window.location='/inicio.php'</script>";
        //echo "<script>alert('se ha identificado el usuario con exito');window.location='/usuarioIdentificado.php'</script>";
    
    }
    
   
}

/*$resultado = mysqli_query($conn, $comprobar);
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
*/

?>
