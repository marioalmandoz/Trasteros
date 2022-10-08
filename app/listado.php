<?php
include("cn.php");
$trasteros= $conn->query("SELECT * FROM trastero");
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
                while ($row = $trasteros->fetch_assoc())  {?>
                    <div class=""> <?php echo $row["id"];?></div>
                    <div class=""> <?php echo $row["nombre"];?></div>
                    <div class=""> <?php echo $row["metroCuadrado"];?></div>
                    <div class=""> <?php echo $row["localizacion"];?></div>
                    <div class=""> <?php echo $row["responsable"];?></div>
                    <div class="">
                        <a href="editar.php?id=<?php echo $row["id_trastero"];?>" class="">Editar contenido</a> |
                        <a href="eliminar.php?id=<?php echo $row["id_trastero"];?>" class=""></a>Eliminar trastero</a>
                    </div>
                    <?php } mysqli_free_result($resultado);?>
            </div>                               
        </body>
    </html>