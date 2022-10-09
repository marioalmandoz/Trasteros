<?php
include("cn.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Contacta con nosotros </title>
        <link rel="stylesheet" href="contacto.css">
        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-form">
            <div class="info-form">
                <h2> Contacta con nosotros </h2>
                <p>Siempre queremos estar al tanto de los problemas que os surjan al usar nuestra web. Si tenéis cualquier duda sobre nuestros trasteros o los contratos de alquiler que ofertamos, preguntádnos sin pestañear. </p>
                <a href="#"> <i class="fa fa-phone"></i> 944-22-55-77
                </a>
                <a href="#"> <i class="fa fa-envelope"></i> alquilaTuTrastero@gmail.com
                </a>
                <a href="#"> <i class="fa fa-map-marked"></i> Barakaldo,Vizcaya,España
                </a>
            </div>
            <form action="#" autocomplete="off">
                <input type="email" name="email" placeholder="Correo electrónico" id="email" class="campo">
                <input type="text" name="asunto" placeholder="Escribe el asunto del mensaje" class="campo">

                <textarea name="mensaje" placeholder="Escribe tu mensaje" ></textarea>

                <input type="submit" name="enviar" value="Enviar mensaje" class="but-enviar">


            </form>
        </div>
        <script type="text/javascript" src="contacto.js"></script>
    </body>
</html>