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
        
            
            <form action="actualzar.php" method="POST" id="form">
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
                    <input type="text" name="dni" id="dni" value="<?php echo $_SESSION['DNI'];?> "required><span class="barra"></span>
                    <label for="transicion">DNI</label>
                </div>
                <div class="grupo">
                    <input type="text" name="telefono" id="telefono" value="<?php echo $_SESSION['telefono'];?>" required><span class="barra"></span>
                    <label for="transicion">Telefono</label>
                </div>
                <div class="grupo">
                    <input type="date" name="fechaN" id="fecha_nac" value="<?php echo $_SESSION['fechaN'];?>"required><span class="barra"></span>
                    <label for="fecha">Fecha Nacimiento</label>
                </div>
                <div class="grupo">
                    <input type="email" name="email" id="email" value="<?php echo $_SESSION['email'];?>"required><span class="barra"></span>
                    <label for="transicion">E-mail</label>
                </div>
                <div class="grupo">
                    <input type="password" name="clave" id="password1" value="<?php echo $_SESSION['clave'];?>" required><span class="barra"></span>
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
    </body>
</html>