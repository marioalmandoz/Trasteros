<?php
//denegar xframe options
ini_set("session.cookie_httponly", True);//httponly flag
//sesion php y conexion con base de dadtos
session_start();
header('X-Frame-Options: SAMEORIGIN');
//x content type options
header('X-Content-Type-Options: nosniff');
 //eliminar header x-powered-by
 header_remove('x-powered-by');
//conexion con la base de datos 
include("cn.php");
//LOG
include("log.php");
$log = new Log("log.txt");

//obtener datos del formulario
if(!isset($_POST["_token"]) || !isset($_SESSION["_token"])){

    exit("No se ha puesto el token");
}
if($_POST["_token"] == $_SESSION["_token"]){
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $metroCuadrado = $_POST["metroCuadrado"];
    $localizacion = $_POST["localizacion"];
    $responsable = $_POST["responsable"];

    //Actalizar los datos
    $actualizar = "UPDATE Trastero set nombre=?, metroCuadrado=?, localizacion=?, responsable=? WHERE id='$id'";
    //consulta parametrizada
    //preparar
    if (!($sentencia = $conn->prepare($actualizar))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
        $log->writeLine($log->getRealIP(),"W",$_SESSION['email']  ,"Falló la preparación al editar un Trastero");
    }

    //comprobar parametros
    if (!$sentencia->bind_param("siss", $nombre, $metroCuadrado, $localizacion, $responsable)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
        $log->writeLine($log->getRealIP(),"W",$_SESSION['email']  ,"Falló la vinculación de parámetros al editar un Trastero");
    }
    //ejecutar
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
        echo "<script>alert('no se puedieron actualizar los datos'); window.history.go(-1);</script>";
        $log->writeLine($log->getRealIP(),"E",$_SESSION['email']  ,"Falló la ejecución al editar un trastero");

    }else {//la ejecucion es correcta
        echo "<script>alert('se han cambiado los datos con exito');
        window.location='/listado.php'</script>";
        $log->writeLine($log->getRealIP(),"C",$_SESSION['email'] ,"Se han cambiado los datos de un trastero");
    }
    unset($_SESSION["_token"]);
}

?>