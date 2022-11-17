<?php
//denegar xframe options
header('X-Frame-Options: SAMEORIGIN');
//x content type options
header('X-Content-Type-Options: nosniff');
 //eliminar header x-powered-by
header_remove('x-powered-by');
//comprobacion timeout
include("timeout.php");
//Conexion con la base de datos
include("cn.php");
?>
<!-- Pagina html de listado los de los trasteros-->
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" http-equiv="Content-Security-Policy" content="img-src https://*; child-src 'self';"/>
            <title>
                Listado de trasteros 
            </title>
            <link rel="stylesheet" type="text/css" href="inicio.css"/>
            <link rel="stylesheet"  type="text/css" href="listado.css">
            <link rel = " shortcut icon " href = " ./favicon.png " type = " image / x - icon " >

        </head>
        <header>
            <div class="texto">
                Esta es la lista de nuestros trasteros 
                <?php
                session_start(); 
                if (isset($_SESSION['nombre'])) {
                    //sesion iniciada
                    echo '<a href="contacto.php" class="botonCabecera"> Contacto </a>';
                    echo '<a href="cerrarsesion.php" class="botonCabecera"> Cerrar sesion </a>';
                    echo '<a href="modificaciones.php" class="botonCabecera"> Modifica tus datos </a>';
                    echo '<a href="usuarioIdentificado.php" class="botonCabecera"> Inicio </a>';
                    echo '<a href="anadirTrastero.php" class="botonCabecera"> Añadir Trastero </a>';
                    echo '<br><br><div class="texto2"> Identificado como   ';
                    echo  $_SESSION["nombre"];
                    echo '</div>';
                } else {
                    //sesion no iniciada
                    echo '<a href="contacto.php" class="botonCabecera"> Contacto </a>';
                    echo '<a href="registro.php" class="botonCabecera"> Registrate </a>';
                    echo '<a href="inicio.php" class="botonCabecera"> Inicio </a>';
    
                }
                ?>
                
            </div>
            
        </header>
        <body><!-- Tabla de los trasteros --> 
            <ALIGN:CENTER>
            <table class="content-table">
                <thead>
                    <tr>
                        
                        <td class="">ID</td>
                        <td class="">Nombre</td>
                        <td class="">MetroCuadrado</td>
                        <td class="">Localizacion</td>
                        <td class="">Responsable</td>
                        <td class="">Operaciones</td>
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
                            <form action="editar.php" method="POST">
                                <input hidden readonly="readonly" type="" name="id" value="<?php echo $row["id"];?>">
                                <input type="submit" class="botonp" value="Editar contenido" > <!-- href="editar.php?id=?php echo $row["id"];?>" -->
                            </form>
                                <input type="button" onClick="eliminar(<?php echo $row['id']; ?>)"  class="botonp" value="Eliminar Trastero">
                            </td>
                        </tr>
                        <script>
                                function eliminar(id) {
                                if (confirm("¿Está seguro de que desea eliminar este trastero?")){
                                    window.location.href='procesar_eliminar.php?id=' +id+'';
                                    return true;
                                }
                            }
                        </script>

                    <?php } mysqli_free_result($resultado);?>
                </tbody>
            </table> 
            </ALIGN:CENTER>            
                        
        </body>
    </html>