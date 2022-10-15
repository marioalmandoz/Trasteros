<?php
//Conexion con la base de datos
include("cn.php");
// id obtenido del listado.php
$id = $_GET["id"];
//Se elimina el trastero mediate su id
$eliminar= "DELETE FROM Trastero WHERE id = '$id'";

$resultado = mysqli_query($conn, $eliminar) or die($eliminar);
header("Location: listado.php");
?>