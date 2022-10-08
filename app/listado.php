<?php
include("cn.php");
//$trasteros= $conn->query("SELECT * FROM trastero");
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>
                Listado de trasteros 
            </title>
            <!--<link rel="stylesheet" type="text/css" href="inicio.css"/>-->
            <link rel="stylesheet"  type="text/css" href="listado.css">
            <link rel = " shortcut icon " href = " ./favicon.png " type = " image / x - icon " >

        </head>
        <header>
            <div id="titulo"> Datos Trasteros 
            <br><a href="usuarioIdentificado.php" class=""> Volver al inicio</a></div></header>
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
                    <?php $resultado = mysqli_query($conn, "SELECT * FROM Trastero");
                    while ($row = mysqli_fetch_array($resultado))  {?>
                        <tr>
                            <td class=""> <?php echo $row["id"];?></td>
                            <td class=""> <?php echo $row["nombre"];?></td>
                            <td class=""> <?php echo $row["metroCuadrado"];?></td>
                            <td class=""> <?php echo $row["localizacion"];?></td>
                            <td class=""> <?php echo $row["responsable"];?></td>
                            <td class="">
                                <a href="editar.php?id=<?php echo $row["id"];?>" class="">Editar contenido</a> |
                                <a href="eliminar.php?id=<?php echo $row["id_trastero"];?>" class=""></a>Eliminar trastero</a>
                            </td>
                        </tr>
                    <?php } mysqli_free_result($resultado);?>
                </tbody>
            </table> 
            </ALIGN:CENTER>                              
        </body>
    </html>