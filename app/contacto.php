<?php
//denegar xframe options
//denegar xframe options
ini_set("session.cookie_httponly", True);//httponly flag
//sesion php y conexion con base de dadtos
session_start();
//comprobacion timeout
include("timeout.php");

header('X-Frame-Options: SAMEORIGIN');
include("cn.php");
$_SESSION["token"] = bin2hex(random_bytes(32));

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Contacta con nosotros </title>
        <link rel="stylesheet" href="contacto.css">
        <link rel = " shortcut icon " href = " ./favicon.png " type = " image / x - icon " >
        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    </head>
    <header>
            <div class="texto">
                Contacta con nosotros  
                <?php
                session_start(); 
                if (isset($_SESSION['nombre'])) {
                    //sesion iniciada
                    echo '<a href="listado.php" class="botonCabecera"> Lista de trasteros </a>';
                    echo '<a href="cerrarsesion.php" class="botonCabecera"> Cerrar sesion </a>';
                    echo '<a href="modificaciones.php" class="botonCabecera"> Modifica tus datos </a>';
                    echo '<a href="usuarioIdentificado.php" class="botonCabecera"> Inicio </a>';
                    echo '<br><br><div class="texto2"> Identificado como   ';
                    echo  $_SESSION["nombre"];
                    echo '</div>';
                } else {
                    //sesion no iniciada
                    echo '<a href="listado.php" class="botonCabecera"> Lista de trasteros </a>';
                    echo '<a href="registro.php" class="botonCabecera"> Registrate </a>';
                    echo '<a href="inicio.php" class="botonCabecera"> Inicio </a>';
    
                }
                ?>
                
            </div>
            
    </header>
    <body>
        <div class="container-form">
            <div class="info-form">
                
                <p>Siempre queremos estar al tanto de los problemas que os surjan al usar nuestra web. Si tenéis cualquier duda sobre nuestros trasteros o los contratos de alquiler que ofertamos, preguntádnos sin pestañear. </p>
                <a href="#"> <i class="fa fa-phone"></i> 944-22-55-77
                </a>
                <a href="#"> <i class="fa fa-envelope"></i> alquilaTuTrasteroSGSSI@gmail.com
                </a>
                <a href="#"> <i class="fa fa-map-marked"></i> Barakaldo,Vizcaya,España
                </a>
            </div>
            <!-- enviar mensaje -->
            <form action="https://formsubmit.co/alquilaTuTrasteroSGSSI@gmail.com" method="POST" id="form">
                <input type="hidden" name="_token" value="<?php $_SESSION["_token"]?>" />
                <input type="email" name="email" placeholder="Correo electrónico: ejemplo@servidor.extensión" id="email" class="campo" required>
                <input type="text" name="asunto" placeholder="Escribe el asunto del mensaje" class="campo" required>

                <textarea name="mensaje" placeholder="Escribe tu mensaje" required></textarea>

                <input type="submit" name="enviar" value="Enviar mensaje" class="but-enviar">


            </form>
        </div>
       <!-- <script type="text/javascript" src="contacto.js"></script> -->
    </body>
</html>