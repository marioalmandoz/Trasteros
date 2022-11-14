<?php
ini_set("session.cookie_httponly", True);//httponly flag
//sesion php y conexion con base de dadtos
session_start();
//denegar xframe options
header('X-Frame-Options: SAMEORIGIN');


include("cn.php");

$_SESSION["_token"] = bin2hex(random_bytes(32));

if (isset($_SESSION['nombre'])) {
    //identificado - redirigir 
    header("Location: usuarioIdentificado.php");
} else {
  //no identificado

}
?>


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
                        ¡ Bienvenido a Trasteros Y Más !
                    </h1>
                </header>

            
                <form action="identificar.php" method="POST" id="iniciosesion">
                <input type="hidden" name="_token" value="<?$_SESSION["_token"]?>" >
                    <h3 id="text">Identifícate:</h3>
                    <div class="grupo">
                        <label for="">E-mail</label>
                        <br>
                        <input type="email" name="email" id="email"  placeholder="nombre@servidor.extension" required>
                    
                    </div>
                    <br>
                    <div class="grupo">
                        <label for="">Contraseña</label>
                        <br>
                        <input type="password" name="clave" id="contraseña" placeholder="Introduce tu contraseña" required><span class="barra"></span>
                    
                    </div>
                    <br>
                    <input type="submit" class="button" value="Enviar">
	                <input type="reset" class="button" value="Borrar">
                </form>
            
            
                <a href="registro.php" class="boton" >Registro</a>
            
                <!--<a href="identificacion.html" class="boton">Haz click aquí para identificarte</a>*/ -->
                <br><br>
                <a href="listado.php" class="boton">Ver lista de trasteros</a>
                <br><br>
                <a href="contacto.php" class="boton">Contacta con nosotros</a>
            
                <!--
                <form action="registro.html">
                    <input type="submit" value=" Haz click aqui para registrarte">
                </form>
                <br>
                <form action="identificacion.html">
                    <input type="submit" value=" Haz click aqui para modificar tus datos">
                </form>
                <br>
                <form action="inicio.html">
                    <input type="submit" value=" Haz click aqui para ver el listado de trasteros y modificarlo">
                </form>
                -->
            </div>
        
        </body>
    </html>
