<?php
ini_set("session.cookie_httponly", True);//httponly flag
//Conexion con la base de datos e inicio de sesion
    session_start(); 
    if (isset($_SESSION['nombre'])) {// identificado 
        //do nothing
        //denegar xframe options
        header('X-Frame-Options: SAMEORIGIN');
        //comprobacion timeout --> cerrar sesion automaticamente
        include("timeout.php");
    } else {//no identificado
        header("Location: inicio.php");
    
    }
?>

<?php 
//session_start();
include("cn.php");


?>
<!-- Pagina html de usuarioIdentificado-->
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" http-equiv="Content-Security-Policy" content="default-src 'self'; img-src https://*; child-src 'self';"/>
            <title>
                Trasteros Y MAS
            </title>
            <link rel="stylesheet" type="text/css" href="inicio.css"/>
            <link rel = " shortcut icon " href = " ./favicon.png " type = " image / x - icon " >

        </head>

        <body>
        

            <div id="container">
                <header>
                    <h1>
                        ¡ Bienvenido a Trasteros Y Más, 
                        <?php 
                         echo $_SESSION['nombre'];
                        ?> !
                    </h1>
                </header>
            
                <br><br><br>
                <a href="modificaciones.php" class="boton" >Modificar datos</a>
            
                <br><br><br>
                <a href="listado.php" class="boton">Ver lista de trasteros</a>
                <br><br><br>
                <a href="contacto.php" class="boton">Contacta con nosotros</a>
                <br><br><br><br><br><br><br><br>
                <a href="cerrarsesion.php" class="boton">cerrar sesión</a>

            
            </div>
        
        </body>
    </html>