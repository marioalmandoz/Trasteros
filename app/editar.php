<?php
include("cn.php");
$id= $_GET["id"];
$trasteros= "SELECT * FROM Trastero WHERE id_trastero='$id'";
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>
                Listado de trasteros 
            </title>
            <link rel="stylesheet" type="text/css" href="inicio.css"/>
            <link rel = " shortcut icon " href = " ./favicon.png " type = " image / x - icon " >

        </head>

        <body>
            <form class="">
                <div class=""> Datos Trasteros <a href="usuarioIdentificado.php" class=""> Volver al inicio</a></div>
                <div class="">ID</div>
                <div class="">Nombre</div>
                <div class="">MetroCuadrado</div>
                <div class="">Localizacion</div>
                <div class="">Responsable</div>
                <div class="">Operacion</div>
                <?php $resultado = mysqli_query($conn, $trasteros);
                while($row=mysql_fetch_assoc($resultado))  {?>
                    <input type="hidden" class="" value="<?php echo $row["id"];?>" name="id"></div>
                    <input type="text" class="" value="<?php echo $row["nombre"];?>" name="nombre"></div>
                    <input type="text" class="" value="<?php echo $row["metroCuadrado"];?>" name="metroCuadrado"></div>
                    <input type="text" class="" value="<?php echo $row["localizacion"];?>" name="localizacion"></div>
                    <input type="text" class="" value="<?php echo $row["responsable"];?>" name="responsable"></div>
                    <?php } mysqli_free_result($resultado);?>
                    <input type="submit" value="Actualizar" class="">
                </form>                               
        </body>
    </html>