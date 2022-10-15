<?php
//conexion con la base de datos 
include("cn.php");
//obtener datos del formulario
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$metrosCuadrados = $_POST["metrosCuadrados"];
$localizacion = $_POST["localizacion"];
$responsable = $_POST["responsable"];
 
// Insertar Trastero
$insertar = "INSERT INTO Trastero(id, nombre, metroCuadrado, localizacion, responsable) VALUES ('$id', '$nombre', $metrosCuadrados, '$localizacion', '$responsable')";

$resultado = mysqli_query($conn, $insertar);
if($resultado) {
    echo "<script>alert('se ha añadido el trastero con exito');
    window.location='/usuarioIdentificado.php'</script>";
}else{
    echo "<script>alert('no se puede añadir el trastero'); window.history.go(-1);</script>";
}


?>