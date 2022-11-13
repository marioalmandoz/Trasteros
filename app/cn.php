<?php
  //iniciar sesion
    session_start(); 
    //denegar xframe options
   header('X-Frame-Options: DENY');
?>
<?php
  // phpinfo();
  $hostname = "db";
  $username = "admin";
  $password = "I7g71pNiW6y";
  $db = "database";

  $conn = mysqli_connect($hostname,$username,$password,$db);
  if ($conn->connect_error) {
    //mensaje de error si la conexion falla
    die("Database connection failed: " . $conn->connect_error);
  }
?>