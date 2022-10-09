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
            Registrate en nuestra página web
        </title>
        <link rel="stylesheet" href="estilosRegistro.css" />
        <link rel="stylesheet" href="listado.css" />
    </head>
    <header>
            <div class="texto">
                <?php
                    echo '<a href="" class="botonCabecera"> Contacto</a>';
                    echo '<a href="usuarioIdentificado.php" class="botonCabecera"> Volver</a>';
                ?>
                
            </div>
            
        </header>

    <body>
        
        
            <form action="insertar.php" method="POST" id="form">
                <div class="form">
                    <h1>Registro</h1>
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
                    <input type="text" name="telefono" id="telefono" @blur="showDatepicker" required ><span class="barra"></span>
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
                    <input type="password" name="clave" id="password1" required ><span class="barra"></span>
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
</html>