<?php
//denegar xframe options
header('X-Frame-Options: SAMEORIGIN');
//x content type options
header('X-Content-Type-Options: nosniff');
 //eliminar header x-powered-by
 header_remove('x-powered-by');

//conexion base da datos
include("cn.php");
//log
include("log.php");
$log = new Log("log.txt");
//obtener datos de formulario
if(!isset($_POST["_token"]) || !isset($_SESSION["_token"])){
    exit("No se ha puesto el token");
}

if($_POST["_token"] == $_SESSION["_token"]){
    $nombre = $_POST["nombre"];
    $nombre= htmlspecialchars($nombre);
    $apellidos = $_POST["apellidos"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $fechaN = $_POST["fechaN"];
    $email = $_POST["email"];
    $clave = $_POST["clave"]; 
    $clave= password_hash($clave,PASSWORD_DEFAULT);

    //sql
    $insertar = "INSERT INTO Usuario(nombre, apellido, DNI, telefono, fechaN, email, clave) VALUES (?, ?, ?, ?, ?, ? ,?)";

    //crear consulta parametrizada

    //preparar
    if (!($sentencia = $conn->prepare($insertar))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
        $log->writeLine($log->getRealIP(),"E",$email,"Falló la preparacion al insertar un usuario nuevo");
    }

    //comprobar parametros
    if (!$sentencia->bind_param("sssisss", $nombre, $apellidos, $dni, $telefono, $fechaN, $email, $clave)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
        $log->writeLine($log->getRealIP(),"W",$email,"Falló la vinculacion de parámetros al insertar un usuario nuevo");
    }
    //ejecutar
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
        $log->writeLine($log->getRealIP(),"E",$email,"Falló la eecución al insertar un usuario nuevo");

    }else {//la ejecuacion es correcta
        $log->writeLine($log->getRealIP(),"I",$email,"Se haregistrado correctamente");
        echo "<script>alert('se ha registrado el usuario con exito');
        window.location='/usuarioIdentificado.php'</script>";

    }
    unset($_SESSION["_token"]);
}
?>