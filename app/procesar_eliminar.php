<?php
include("cn.php");

$id = $_GET["id"];

$eliminar= "DELETE FROM Trastero WHERE id = '$id'";

$resultado = mysqli_query($conn, $eliminar) or die($eliminar);
header("Location: listado.php");
?>