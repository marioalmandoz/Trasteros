<?php
//conexion con la base de datos 
include("cn.php");
//obtener datos del formulario
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$metroCuadrado = $_POST["metroCuadrado"];
$localizacion = $_POST["localizacion"];
$responsable = $_POST["responsable"];

//Actalizar los datos
$actualizar = "UPDATE Trastero set nombre='$nombre', metroCuadrado=$metroCuadrado, localizacion='$localizacion', responsable='$responsable' WHERE id='$id'";

$resultado = mysqli_query($conn, $actualizar);
if($resultado) {//datos editados
    echo "<script>alert('se han cambiado los datos con exito');
    window.location='/listado.php'</script>";
}else{//datos no editados
    echo "<script>alert('no se puedieron actualizar los datos'); window.history.go(-1);</script>";
}
?>