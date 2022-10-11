<?php
    session_start(); 
?>
<?php
include("cn.php");
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>
            Modifica tus datos
        </title>
        <link rel = " shortcut icon " href = " ./favicon.png " type = " image / x - icon " >
        <script type="text/javascript" src="fichero.js"></script>
        <link rel="stylesheet" href="estilosRegistro.css">
    </head>
    <header>
            <div class="texto">
                Modifica aquí tus datos

                <a href="contacto.php" class="botonCabecera"> Contacto </a>
                <a href="listado.php" class="botonCabecera"> Listado de trasteros </a>
                <a href="inicio.php" class="botonCabecera"> Volver al inicio </a>

                
            </div>
            
        </header>
    <body>
        
            
            <form action="actualizar.php" method="POST" id="form">
                <div class="form">
                    <h1>Modifica tus datos</h1>
                <div class="grupo">
                    <input type="text" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre'];?>"><span class="barra"></span>
                    <label for="">Nombre</label>
                </div>
                <div class="grupo">
                    <input type="text" name="apellidos" id="apellidos" value="<?php echo $_SESSION['apellido'];?>" ><span class="barra"></span>
                    <label for="">Apellidos</label>
                </div>
                <div class="grupo">
                    <input type="text" name="dni" id="dni" value="<?php echo $_SESSION['DNI'];?> "><span class="barra"></span>
                    <label for="">DNI</label>
                </div>
                <div class="grupo">
                    <input type="text" name="telefono" id="telefono" value="<?php echo $_SESSION['telefono'];?>" ><span class="barra"></span>
                    <label for="">Telefono</label>
                </div>
                <div class="grupo">
                    <input type="date" name="fechaN" id="fecha_nac" value="<?php echo $_SESSION['fechaN'];?>"><span class="barra"></span>
                    <label for="">Fecha Nacimiento</label>
                </div>
                <div class="grupo">
                    <input type="email" name="email" id="email" value="<?php echo $_SESSION['email'];?>"><span class="barra"></span>
                    <label for="">E-mail</label>
                </div>
                <div class="grupo">
                    <input type="password" name="clave" id="password1" value="<?php echo $_SESSION['clave'];?>" ><span class="barra"></span>
                    <label for="">Contraseña</label>
                </div>
                <div class="grupo">
                    <input type="password" name="clave" id="password12" value="<?php echo $_SESSION['clave'];?>"><span class="barra"></span>
                    <label for="">Repita la contraseña</label>
                </div>
                
                <button type="submit">Modificar</button>
                <p class="warnings" id="warnings"></p>
                </div>
            </form>
    </body>
</html>