<?php
//denegar xframe options
header('X-Frame-Options: SAMEORIGIN');
//x content type options
header('X-Content-Type-Options: nosniff');
//Conexion con la base de datos
include("cn.php");
include("log.php");
$log = new Log("log.txt");
$email= $_SESSION['email'];
// id obtenido del listado.php
$id = $_GET["id"];
//Se elimina el trastero mediate su id
$eliminar= "DELETE FROM Trastero WHERE id = '$id'";

$resultado = mysqli_query($conn, $eliminar) or die($eliminar);
header("Location: listado.php");
$log->writeLine("C",'$email' ,"Se han eliminado un Trastero");
$log->close();
?>