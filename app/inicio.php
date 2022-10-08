<?php
//session_start();
include("cn.php");
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
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
                    <h3 id="text">Identifícate:</h3>
                    <div class="grupo">
                        <label for="">E-mail</label>
                        <br>
                        <input type="email" name="email" id="email" ><span class="barra"></span>
                    
                    </div>
                    <br>
                    <div class="grupo">
                        <label for="">Contraseña</label>
                        <br>
                        <input type="password" name="clave" id="contraseña" ><span class="barra"></span>
                    
                    </div>
                    <br>
                    <input type="submit" class="button" value="Enviar">
	                <input type="reset" class="button" value="Borrar">
                </form>
            
            
                <a href="registro.php" class="boton" >Registro</a>
            
                <!--<a href="identificacion.html" class="boton">Haz click aquí para identificarte</a>*/ -->
                <br><br>
                <a href="listado.php" class="boton">Ver lista de trasteros</a>
            
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