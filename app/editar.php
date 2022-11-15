<?php
//denegar xframe options
ini_set("session.cookie_httponly", True);//httponly flag
//sesion php y conexion con base de dadtos
session_start();
header('X-Frame-Options: SAMEORIGIN');
//x content type options
header('X-Content-Type-Options: nosniff');
 //eliminar header x-powered-by
 header_remove('x-powered-by');

include("cn.php");

$_SESSION["token"] = bin2hex(random_bytes(32));
//obtener datos formulario
$id= $_POST["id"];
//s$trasteros= "SELECT * FROM Trastero WHERE id='$id'";
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" http-equiv="Content-Security-Policy" content="default-src 'self'; img-src https://*; child-src 'self';"/>
            <title>
                Editar trastero
            </title>
            <link rel="stylesheet" type="text/css" href="inicio.css"/>
            <link rel="stylesheet"  type="text/css" href="listado.css">
            <link rel = " shortcut icon " href = " ./favicon.png " type = " image / x - icon " >

        </head>
        <header>
            <div class="texto">
                Edita aquí el trastero

                <a href="contacto.php" class="botonCabecera"> Contacto </a>
                <a href="listado.php" class="botonCabecera"> Listado de trasteros </a>
                <a href="inicio.php" class="botonCabecera"> Volver al inicio </a>

                
            </div>
            
        </header>
        <body>
            <ALIGN:CENTER>
            <table class="content-table">    
                <thead>
                    <tr>
                        <td class="">ID</td>
                        <td class="">Nombre</td>
                        <td class="">MetroCuadrado</td>
                        <td class="">Localizacion</td>
                        <td class="">Responsable</td>
                        <td class="">Operacion</td>

                    </tr>
                </thead>
                <br><br>
                <tbody>
                <form action="procesar_editar.php" method="POST"class="content-table" id="form">
                    <input type="hidden" name="_token" value="<?=$_SESSION["_token"]?>" />

                    <?php $resultado = mysqli_query($conn, "SELECT * FROM Trastero WHERE id='$id'");
                    //while para crear tabla
                    while($row = mysqli_fetch_array($resultado))  {?>
                        <tr>
                            
                            <td><input type="text" readonly="readonly" class="" value="<?php echo $row["id"];?>" name="id" id="id"></div></td>
                            <td><input type="text" class="" value="<?php echo $row["nombre"];?>" name="nombre" id="nombre"></div></td>
                            <td><input type="text" class="" value="<?php echo $row["metroCuadrado"];?>" name="metroCuadrado" id="m2"></div></td>
                            <td><input type="text" class="" value="<?php echo $row["localizacion"];?>" name="localizacion" id="localizacion"></div></td>
                            <td><input type="text" class="" value="<?php echo $row["responsable"];?>" name="responsable" id="responsable"></div></td>
                            <td><button class="button" type="submit">Actualizar</button>
                    <p class="warnings" id="warnings"></p></td>
                        </tr>
                    <?php } mysqli_free_result($resultado);?>
                    
                </tbody>
                </form>
            </ALIGN:CENTER>    
            <script type="text/javascript" src="anadirTrastero.js"></script>                         
        </body>
    </html>