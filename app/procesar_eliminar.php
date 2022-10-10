<?php
include("cn.php");

$id = $_GET["id"];

$eliminar= "DELETE FROM Trastero WHERE id = '$id'";

$resultado = mysqli_query($conn, $eliminar);

if ($eliminar) {
    header("Location : listado.php");
}else{
    echo "<script>alert('se ha eliminado el trastero con exito');
    window.location='/listado.php'</script>";
}
?>