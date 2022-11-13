<?php
//denegar xframe options
ini_set("session.cookie_httponly", True);//httponly flag
//sesion php y conexion con base de dadtos
session_start();
header('X-Frame-Options: DENY');
//conexion con la base de datos 
include("cn.php");
//obtener datos del formulario

if(!isset($_POST["token"]) || !isset($_SESSION["token"])){
    exit("No se ha puesto el token");
}

if($_POST["token"] == $_SESSION["token"]){
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
    }

    //comprobar parametros
    if (!$sentencia->bind_param("isiss", $id, $nombre, $metroCuadrado, $localizacion, $responsable)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    //ejecutar
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
        echo "<script>alert('no se puedieron actualizar los datos'); window.history.go(-1);</script>";

    }else {//la ejecuacion es correcta
        echo "<script>alert('se han cambiado los datos con exito');
        window.location='/listado.php'</script>";

    }
    unset($_SESSION["token"]);
}

?>