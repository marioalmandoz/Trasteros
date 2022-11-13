<?php
ini_set("session.cookie_httponly", True);//httponly flag
// Iniciamos la sesion
session_start();
//denegar xframe options
header('X-Frame-Options: DENY');
 

// Destruir todo en esta sesión
session_destroy();
?>
<?php
  
// Iniciamos la sesion
session_start();
if (isset($_SESSION['nombre'])) {
    echo "<script>alert('no se ha cerrado la sesion');window.history.go(-1);</script>";
} else {
    echo "<script>alert('Se ha cerrado la sesión con éxito.');
    window.history.go(-1);</script>";

}
?>