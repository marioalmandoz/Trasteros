<?php
  //iniciar sesion
    session_start(); 
?>
<?php
  // phpinfo();
  $hostname = "db";
  $username = "trasteros";
  $password = "I7#g71pNiW6y";
  $db = "database";

  $conn = mysqli_connect($hostname,$username,$password,$db);
  if ($conn->connect_error) {
    //mensaje de error si la conexion falla
    die("Database connection failed: " . $conn->connect_error);
  }
?>