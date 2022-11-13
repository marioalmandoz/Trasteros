<?php
    session_start(); 
    $_SESSION["token"] = bin2hex(random_bytes(32));
    //Conexion con la base de datos e inicio de sesion

    //denegar xframe options
   header('X-Frame-Options: DENY');
?>
<?php
include("cn.php");
?>
<!-- Pagina html de Registro-->
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>
            Registrate en nuestra web
        </title>
        <link rel="stylesheet" href="estilosRegistro.css" />
        <link rel = " shortcut icon " href = " ./favicon.png " type = " image / x - icon " >
    </head>

    <header>
            <div class="texto">
                Regístratate gratis en nuestra web!

                <a href="contacto.php" class="botonCabecera"> Contacto </a>
                <a href="listado.php" class="botonCabecera"> Listado de trasteros </a>
                <a href="inicio.php" class="botonCabecera"> Volver al inicio </a>

                
            </div>
            
        </header>
    <div class="container">
        <body>
            
                <form action="insertar.php" method="POST" id="form">
                <input type="hidden" name="_token" value="<?php=$_SESSION["_token"]?>" />
                <div class="form">
                    <h1>Introduce tus datos</h1>
                <div class="grupo">
                    <input type="text" name="nombre" id="nombre" required><span class="barra"></span>
                    <label for="transicion">Nombre</label>
                </div>
                <div class="grupo">
                    <input type="text" name="apellidos" id="apellidos" required ><span class="barra"></span>
                    <label for="transicion">Apellidos</label>
                </div>
                <div class="grupo">
                    <input type="text" name="dni" placeholder="11111111-A" id="dni" required ><span class="barra"></span>
                    <label for="transicion">DNI</label>
                </div>
                <div class="grupo">
                    <input type="text" name="telefono" placeholder="666666666" id="telefono" @blur="showDatepicker" required ><span class="barra"></span>
                    <label for="transicion">Telefono</label>
                </div>
                <div class="grupo">
                    <input type="date" name="fechaN" id="fecha_nac" required ><span class="barra"></span>
                    <label for="fecha">Fecha Nacimiento</label>
                </div>
                <div class="grupo">
                    <input type="email" name="email" placeholder="nombre@servidor.extension" id="email" required ><span class="barra"></span>
                    <label for="transicion">E-mail</label>
                </div>
                <div class="grupo">
                    <input type="password" name="clave" placeholder="Minimo 8 carácteres. Debe contener letras(Minúsculas y Mayus) y números" id="password1" required ><span class="barra"></span>
                    <label for="transicion">Contraseña</label>
                </div>
                <div class="grupo">
                    <input type="password" name="clave2" id="password12" required><span class="barra"></span>
                    <label for="transicion">Repita la contraseña</label>
                </div>
                
                <button type="submit">Regístrate</button>
                <p class="warnings" id="warnings"></p>
                </div>
            </form>
            <script type="text/javascript" src="registro.js"></script>
        </body>
    </div>
   
</html>