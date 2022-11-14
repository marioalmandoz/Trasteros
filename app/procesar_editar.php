<?php
//denegar xframe options
header('X-Frame-Options: DENY');
//conexion con la base de datos 
include("cn.php");
//obtener datos del formulario
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$metroCuadrado = $_POST["metroCuadrado"];
$localizacion = $_POST["localizacion"];
$responsable = $_POST["responsable"];

//Actalizar los datos
$actualizar = "UPDATE Trastero set nombre=?, metroCuadrado=?, localizacion=?, responsable=? WHERE id=?";
//consulta parametrizada
//preparar
if (!($sentencia = $conn->prepare($actualizar))) {
    echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    $log->writeLine("W",'$email' ,"Falló la preparación al editar un Trastero");
}

//comprobar parametros
if (!$sentencia->bind_param("isiss", $id, $nombre, $metroCuadrado, $localizacion, $responsable)) {
    echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    $log->writeLine("W",'$email' ,"Falló la vinculación de parámetros al editar un Trastero");
}
//ejecutar
if (!$sentencia->execute()) {
    echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    echo "<script>alert('no se puedieron actualizar los datos'); window.history.go(-1);</script>";
    $log->writeLine("E",'$email' ,"Falló la ejecución al editar un trastero");

}else {//la ejecuacion es correcta
    echo "<script>alert('se han cambiado los datos con exito');
    window.location='/listado.php'</script>";
    $log->writeLine("C",'$email' ,"Se han cambiado los datos de un trastero");
}
?>