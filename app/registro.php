
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
        <script type="text/javascript" src="registro.js"></script>
        <link rel="stylesheet" href="estilosRegistro.css" />
    </head>

    <body>
        
        
            <form action="insertar.php" method="POST" id="form">
                <div class="form">
                    <h1>Registro</h1>
                <div class="grupo">
                    <input type="text" name="nombre" id="nombre" ><span class="barra"></span>
                    <label for="">Nombre</label>
                </div>
                <div class="grupo">
                    <input type="text" name="apellidos" id="apellidos"  ><span class="barra"></span>
                    <label for="">Apellidos</label>
                </div>
                <div class="grupo">
                    <input type="text" name="dni" placeholder="11111111-A" id="dni"  ><span class="barra"></span>
                    <label for="">DNI</label>
                </div>
                <div class="grupo">
                    <input type="text" name="telefono" id="telefono"  ><span class="barra"></span>
                    <label for="">Telefono</label>
                </div>
                <div class="grupo">
                    <input type="date" name="fechaN" id="fecha_nac" ><span class="barra"></span>
                    <label for="">Fecha Nacimiento</label>
                </div>
                <div class="grupo">
                    <input type="email" name="email" placeholder="nombre@servidor.extension" id="email" ><span class="barra"></span>
                    <label for="">E-mail</label>
                </div>
                <div class="grupo">
                    <input type="password" name="clave" id="password1"  ><span class="barra"></span>
                    <label for="">Contraseña</label>
                </div>
                <div class="grupo">
                    <input type="password" name="clave2" id="password12" ><span class="barra"></span>
                    <label for="">Repita la contraseña</label>
                </div>
                
                <button type="submit">Regístrate</button>
                <p class="warnings" id="warnings"></p>
                </div>
            </form>
    </body>
</html>