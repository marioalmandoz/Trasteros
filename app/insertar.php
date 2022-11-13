<?php
//conexion base da datos
include("cn.php");
//log
include("log.php");
$log = new Log("log.txt");
//obtener datos de formulario
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
}

//comprobar parametros
if (!$sentencia->bind_param("sssisss", $nombre, $apellidos, $dni, $telefono, $fechaN, $email, $clave)) {
    echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
}

//ejecutar
if (!$sentencia->execute()) {
    echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
}else {//la ejecuacion es correcta
    $log->writeLine("I", "Todo correcto prueba domingo");
    echo "<script>alert('se ha registrado el usuario con exito');
    window.location='/usuarioIdentificado.php'</script>";
    
}


?>