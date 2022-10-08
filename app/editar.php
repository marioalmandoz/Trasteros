<?php
include("cn.php");
$id= $_GET["id"];
//s$trasteros= "SELECT * FROM Trastero WHERE id='$id'";
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>
                Editar trastero
            </title>
            <link rel="stylesheet" type="text/css" href="inicio.css"/>
            <link rel="stylesheet"  type="text/css" href="listado.css">
            <link rel = " shortcut icon " href = " ./favicon.png " type = " image / x - icon " >

        </head>

        <body>
            <ALIGN:CENTER>
            <form action="procesar_editar.php" method="POST"class="content-table">
                <thead>
                    <tr>
                        <div class=""> Datos Trasteros <a href="usuarioIdentificado.php" class=""> Volver al inicio</a></div>
                        <div class="">ID</div>
                        <div class="">Nombre</div>
                        <div class="">MetroCuadrado</div>
                        <div class="">Localizacion</div>
                        <div class="">Responsable</div>
                        <div class="">Operacion</div>
                    </tr>
                </thead>
                <br><br>
                <tbody>
                    <?php $resultado = mysqli_query($conn, "SELECT * FROM Trastero WHERE id='$id'");
                    while($row = mysqli_fetch_array($resultado))  {?>
                        <tr>
                            <input type="hidden" class="" value="<?php echo $row["id"];?>" name="id"></div>
                            <input type="text" class="" value="<?php echo $row["nombre"];?>" name="nombre"></div>
                            <input type="text" class="" value="<?php echo $row["metroCuadrado"];?>" name="metroCuadrado"></div>
                            <input type="text" class="" value="<?php echo $row["localizacion"];?>" name="localizacion"></div>
                            <input type="text" class="" value="<?php echo $row["responsable"];?>" name="responsable"></div>
                        </tr>
                    <?php } mysqli_free_result($resultado);?>
                    <button type="submit">Actualizar</button>
                    <p class="warnings" id="warnings"></p>
                </tbody>
                </form>
            </ALIGN:CENTER>                             
        </body>
    </html>