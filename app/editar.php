<?php
include("cn.php");
$id= $_GET["id"];
$trasteros= "SELECT * FROM trastero WHERE id_trastero='$id'";
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
            <div class="">
                <div class=""> Datos Trasteros <a href="usuarioIdentificado.php" class=""> Volver al inicio</a></div>
                <div class="">ID</div>
                <div class="">Nombre</div>
                <div class="">MetroCuadrado</div>
                <div class="">Localizacion</div>
                <div class="">Responsable</div>
                <div class="">Operacion</div>
                <?php $resultado = mysqli_query($conn, $trasteros);
                while($row=mysql_fetch_assoc($resultado))  {?>
                    <div class=""> <?php echo $row["id"];?></div>
                    <div class=""> <?php echo $row["nombre"];?></div>
                    <div class=""> <?php echo $row["metroCuadrado"];?></div>
                    <div class=""> <?php echo $row["localizacion"];?></div>
                    <div class=""> <?php echo $row["responsable"];?></div>
                    <div class="">
                    <?php } mysqli_free_result($resultado);?>
            </div>                               
        
        </body>
    </html>