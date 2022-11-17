<?php
ini_set("session.cookie_httponly", True);//httponly flag
    //Conexion con la base de datos e inicio de sesion
    session_start(); 
    //denegar xframe options
   header('X-Frame-Options: SAMEORIGIN');
   //eliminar header x-powered-by
   header_remove('x-powered-by');
   //x content type options
    header('X-Content-Type-Options: nosniff');
     //eliminar header x-powered-by
    header_remove('x-powered-by');

   //comprobacion timeout
include("timeout.php");
?>
<?php
include("cn.php");
?>
<!-- Pagina html de modificar los datos del usuario-->
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" http-equiv="Content-Security-Policy" content="default-src 'self'; img-src https://*; child-src 'self';"/>
        <title>
            Modifica tus datos
        </title>
        <link rel = " shortcut icon " href = " ./favicon.png " type = " image / x - icon " >
        
        <link rel="stylesheet" href="estilosRegistro.css">
    </head>
    <header><!--Cabecera -->
            <div class="texto">
                Modifica aquí tus datos

                <a href="contacto.php" class="botonCabecera"> Contacto </a>
                <a href="listado.php" class="botonCabecera"> Listado de trasteros </a>
                <a href="inicio.php" class="botonCabecera"> Volver al inicio </a>

                
            </div>
            
        </header>
    <body>
        
            
            <form action="actualizar.php" method="POST" id="form"><!--Formulario -->
                <div class="form">
                    <h1>Modifica tus datos</h1>
                <div class="grupo">
                    <input type="text" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre'];?>"required><span class="barra"></span>
                    <label for="transicion">Nombre</label>
                </div>
                <div class="grupo">
                    <input type="text" name="apellidos" id="apellidos" value="<?php echo $_SESSION['apellido'];?>"required ><span class="barra"></span>
                    <label for="transicion">Apellidos</label>
                </div>
                <div class="grupo">
                    <input type="text" name="dni" id="dni" placeholder="11111111-A" value="<?php echo $_SESSION['DNI'];?>"required><span class="barra"></span>
                    <label for="transicion">DNI</label>
                </div>
                <div class="grupo">
                    <input type="text" name="telefono" id="telefono" placeholder="666666666" value="<?php echo $_SESSION['telefono'];?>" required><span class="barra"></span>
                    <label for="transicion">Telefono</label>
                </div>
                <div class="grupo">
                    <input type="date" name="fechaN" id="fecha_nac" value="<?php echo $_SESSION['fechaN'];?>"required><span class="barra"></span>
                    <label for="fecha">Fecha Nacimiento</label>
                </div>
                <div class="grupo">
                    <input type="email" name="email" id="email" placeholder="nombre@servidor.extension" value="<?php echo $_SESSION['email'];?>"required><span class="barra"></span>
                    <label for="transicion">E-mail</label>
                </div>
                <div class="grupo">
                    <input type="password" name="clave" id="password1" placeholder="minio 8. Solo letras, números, - y _ " value="<?php echo $_SESSION['clave'];?>" required><span class="barra"></span>
                    <label for="transicion">Contraseña</label>
                </div>
                <div class="grupo">
                    <input type="password" name="clave" id="password12" value="<?php echo $_SESSION['clave'];?>"required><span class="barra"></span>
                    <label for="transicion">Repita la contraseña</label>
                </div>
                
                <button type="submit">Modificar</button>
                <p class="warnings" id="warnings"></p>
                </div>
            </form>

            <script type="text/javascript" src="registro.js"></script>
    </body>
    
</html>