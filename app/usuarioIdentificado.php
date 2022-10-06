

<?php 
include("cn.php");
session_start()

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
                        ¡ Bienvenido a Trasteros Y Más, 
                        <?php session_start()
                         echo $_SESSION['saludo'];
                        ?> !
                    </h1>
                </header>
            
                <br><br><br>
                <a href="modificaciones.php" class="boton" >Modificar datos</a>
            
                <br><br><br>
                <a href="listado.php" class="boton">Ver lista de trasteros</a>
                <br><br><br><br><br><br><br><br>
                <a href="" class="boton">cerrar sesión</a>

            
            </div>
        
        </body>
    </html>