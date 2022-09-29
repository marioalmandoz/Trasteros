<?php
//Confguracion para acceder a la base de datos.
function conn(){
$hostname= "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname= ""; // aqui hay que poner el nombre de la base de datos

    //generar la conexionn con el servidor
    $conectar = mysqli_connect($hostname $usuariodb, $passworddb, $dbname);
    return $conectar
}

?>
