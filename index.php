<?php
  echo '<h1>Yeah, it works!<h1>';
  // phpinfo();
  $hostname = "db";
  $username = "admin";
  $password = "test";
  $db = "database";

  $conn = mysqli_connect($hostname,$username,$password,$db);
  if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
  }

$query = mysqli_query($conn, "SELECT * FROM usuarios")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['id']}</td>
    <td>{$row['nombre']}</td>
   </tr>";
   
}
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>
            Registrate en nuestra página web
        </title>
        <script type="text/javascript" src="fichero.js"></script>
        <link rel="stylesheet" href="estilosRegistro.css">
    </head>

    <body>
        
        
            <form action="" method="POST" id="form">
                <div class="form">
                    <h1>Registro</h1>
                <div class="grupo">
                    <input type="text" name="" id="nombre" ><span class="barra"></span>
                    <label for="">Nombre</label>
                </div>
                <div class="grupo">
                    <input type="text" name="" id="apellidos"  ><span class="barra"></span>
                    <label for="">Apellidos</label>
                </div>
                <div class="grupo">
                    <input type="text" name="" id="dni"  ><span class="barra"></span>
                    <label for="">DNI</label>
                </div>
                <div class="grupo">
                    <input type="text" name="" id="telefono"  ><span class="barra"></span>
                    <label for="">Telefono</label>
                </div>
                <div class="grupo">
                    <input type="date" name="" id="fecha_nac" ><span class="barra"></span>
                    <label for="">Fecha Nacimiento</label>
                </div>
                <div class="grupo">
                    <input type="email" name="" id="email" ><span class="barra"></span>
                    <label for="">E-mail</label>
                </div>
                <div class="grupo">
                    <input type="password" name="" id="password1"  ><span class="barra"></span>
                    <label for="">Contraseña</label>
                </div>
                <div class="grupo">
                    <input type="password" name="" id="password12" ><span class="barra"></span>
                    <label for="">Repita la contraseña</label>
                </div>
                
                <button type="submit">Regístrate</button>
                <p class="warnings" id="warnings"></p>
                </div>
            </form>
    </body>
</html>


