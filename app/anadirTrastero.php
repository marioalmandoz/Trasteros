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
            Añada su trastero
        </title>
        <script type="text/javascript" src="registro.js"></script>
        <link rel="stylesheet" href="estilosRegistro.css" />
        <link rel = " shortcut icon " href = " ./favicon.png " type = " image / x - icon " >
    </head>

    <header>
            <div class="texto">
                Añade aquí un trastero

                <a href="contacto.php" class="botonCabecera"> Contacto </a>
                <a href="listado.php" class="botonCabecera"> Listado de trasteros </a>
                <a href="inicio.php" class="botonCabecera"> Volver al inicio </a>

                
            </div>
            
        </header>
    <div class="container">
        <body>
            
                <form action="insertarTrastero.php" method="POST" id="form">
                <div class="form">
                    <h1>Introduce los datos del trastero</h1>
                <div class="grupo">
                    <input type="text" name="id" id="id" required><span class="barra"></span>
                    <label for="transicion">id</label>
                </div>
                <div class="grupo">
                    <input type="text" name="nombre" id="nombre" required ><span class="barra"></span>
                    <label for="transicion">Nombre</label>
                </div>
                <div class="grupo">
                    <input type="number" name="metrosCuadrados" placeholder="introduzca un numero" id="dni" required ><span class="barra"></span>
                    <label for="transicion">MetrosCuadrados</label>
                </div>
                <div class="grupo">
                    <input type="text" name="localizacion" id="localizacion" @blur="showDatepicker" required ><span class="barra"></span>
                    <label for="transicion">Localizacion</label>
                </div>
                <div class="grupo">
                    <input type="text" name="responsable" id="responsable" required ><span class="barra"></span>
                    <label for="fecha">Responsable</label>
                </div>       

                <button type="submit">Añadir</button>
                <p class="warnings" id="warnings"></p>
                </div>
            </form>
            <script type="text/javascript" src="registro.js"></script>
        </body>
    </div>
   
</html>