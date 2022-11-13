<?php
//conexion con la base de datos 
include("cn.php");
//obtener datos del formulario
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$metrosCuadrados = $_POST["metrosCuadrados"];
$localizacion = $_POST["localizacion"];
$localizacion=htmlspecialchars($localizacion);
$responsable = $_POST["responsable"];
$responsable=htmlspecialchars($responsable);
 
// Insertar Trastero
$insertar = "INSERT INTO Trastero(id, nombre, metroCuadrado, localizacion, responsable) VALUES (?,?,?,?,?)";
//consulta parametrizada

//preparar
if (!($sentencia = $conn->prepare($insertar))) {
    echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
}
//comprobar parametros
if (!$sentencia->bind_param("isiss", $id, $nombre, $metrosCuadrados, $localizacion, $responsable)) {
    echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
}

//ejecutar
if (!$sentencia->execute()) {
    echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    echo "<script>alert('no se puede añadir el trastero'); window.history.go(-1);</script>";
}else {//la ejecuacion es correcta
    echo "<script>alert('se ha añadido el trastero con exito');
    window.location='/usuarioIdentificado.php'</script>";
    
}


?>