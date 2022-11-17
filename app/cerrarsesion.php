<?php
ini_set("session.cookie_httponly", True);//httponly flag
// Iniciamos la sesion
session_start();
//denegar xframe options
header('X-Frame-Options: SAMEORIGIN');
//x content type options
header('X-Content-Type-Options: nosniff');
 //eliminar header x-powered-by
 header_remove('x-powered-by');
 
//log
include("log.php");
$log = new Log("log.txt");
$email= $_SESSION['email'];
// Destruir todo en esta sesión
session_destroy();
?>
<?php
  
// Iniciamos la sesion
session_start();
if (isset($_SESSION['nombre'])) {
    echo "<script>alert('no se ha cerrado la sesion');window.history.go(-1);</script>";
    $log->writeLine($log->getRealIP(),"E",$email ,"No se ha cerrado la sesión");
} else {
    echo "<script>alert('Se ha cerrado la sesión con éxito.');
    window.history.go(-1);</script>";
    $log->writeLine($log->getRealIP(),"C",$email,"Se ha cerrado la sesión");

}
$log->close();
?>