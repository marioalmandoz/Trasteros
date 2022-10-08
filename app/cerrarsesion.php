<?php
// Iniciamos la sesion
session_start();
 

// Destruir todo en esta sesión
session_destroy();
?>
<?php
// Iniciamos la sesion
session_start();
if (isset($_SESSION['nombre'])) {
    echo "<script>alert('no se ha cerrado la sesion');window.history.go(-1);</script>";
} else {
    echo "<script>alert('se ha cerrado la sesion con exito');
    window.location='/inicio.php'</script>";

}
?>