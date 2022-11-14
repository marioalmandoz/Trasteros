<?php 
ini_set("session.cookie_httponly", True);//httponly flag
//iniciar sesion y conectarse
session_start();
//denegar xframe options
header('X-Frame-Options: DENY');
include("cn.php");
include("log.php");
$log = new Log("log.txt");
//obtener datos formulario
$email = $_POST["email"];
$contraseña = $_POST["clave"];

if(!isset($_POST["_token"]) || !isset($_SESSION["_token"])){
    exit("No se ha puesto el token");
}
//comprobar si esta bloqueado por limite de intentos fallidos
<<<<<<< HEAD
if (isset($_SESSION["locked"])){
    $tiempo = time() - $_SESSION["locked"];
    if ($tiempo > 300){
        //si han pasado ya 5 minutos, desbloquear
        unset($_SESSION["locked"]);
        unset($_SESSION["login_attempts"]);
    }else{
        //continuar con el bloqueo
        echo "<script>alert('Ha superado el límite de intentos fallidos, por favor, inténtelo de nuevo en unos instantes.'); window.location='/inicio.php'</script>";
    }
}else{
=======
if($_POST["_token"] == $_SESSION["_token"]){
    if (isset($_SESSION["locked"])){
        $tiempo = time() - $_SESSION["locked"];
        if ($tiempo > 300){
            //si han pasado ya 5 minutos, desbloquear
            unset($_SESSION["locked"]);
            unset($_SESSION["login_attempts"]);
        }else{
            //continuar con el bloqueo
            echo "<script>alert('Ha superado el límite de intentos fallidos, por favor, inténtelo de nuevo en unos instantes.'); window.location='/inicio.php'</script>";
>>>>>>> 57cac30f944b979387f5ab136eea0f2ce3c041c4

        }
    }else{
        

<<<<<<< HEAD
    if (!($sentencia = $conn->prepare("SELECT * FROM Usuario WHERE email = ?"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
        $log->writeLine("W",'$email' ,"Falló la preparación");
    }
=======
        //select
        //crear consulta parametrizada
        //preparar
>>>>>>> 57cac30f944b979387f5ab136eea0f2ce3c041c4

        if (!($sentencia = $conn->prepare("SELECT * FROM Usuario WHERE email = ?"))) {
            echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
        }

<<<<<<< HEAD
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
        $log->writeLine("W",'$email' ,"Falló la vinculación de parámetros");
    }
    //ejecutar
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
        echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); window.location='/inicio.php'</script>";
        $_SESSION["login_attempts"] += 1; //incrementear contador de intentos fallidos
        $log->writeLine("W",'$email' ,"El usuario o la contraseña son incorrectos");
=======
        //comprobar parametros
        if (!$sentencia->bind_param("s", $email)) {
            $_SESSION["login_attempts"] += 1; //incrementear contador de intentos fallidos
>>>>>>> 57cac30f944b979387f5ab136eea0f2ce3c041c4

            echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
        }
        //ejecutar
        if (!$sentencia->execute()) {
            echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
            echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); window.location='/inicio.php'</script>";
            $_SESSION["login_attempts"] += 1; //incrementear contador de intentos fallidos
            $log->writeLine("E", "Ha habido un error inesperado prueba domingo");

        }else {//la ejecuacion es correcta

            //comprobar si existe un usuario con ese mail y contraseña
            $sentencia-> bind_result($nombre, $apellido, $DNI, $telefono, $fechaN, $email, $clave);
            $sentencia->fetch();
            
            if(strlen($nombre)>0 && password_verify($contraseña,$clave)) {
                //si existe
                echo "<script>alert('Se ha identificado el usuario con éxito.');window.location='/usuarioIdentificado.php'</script>";
                //guardar los datos del usuario en la variable de sesion
                $_SESSION['nombre']=$nombre;
                $_SESSION['apellido']=$apellido;
                $_SESSION['DNI']=$DNI;
                $_SESSION['telefono']=$telefono;
                $_SESSION['fechaN']=$fechaN;
                $_SESSION['email']=$email;
                $_SESSION['clave']=$clave;

<<<<<<< HEAD
            $log->writeLine("C",'$email',"Se ha identificado el usuario correctamente");
        }else{
            //si no existe
            $_SESSION["login_attempts"] += 1; //incrementear contador de intentos fallidos

            if ($_SESSION["login_attempts"] > 2){
                //se han hecho 3 intentos incorrectos --> bloquear 5 minutos
                $_SESSION["locked"] = time(); //bloquear y guardar tiempo
                echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); </script>";
                echo "<script>alert('Ha superado el límite de intentos fallidos, por favor, inténtelo de nuevo en unos instantes.');window.location='/inicio.php'</script>";
                $log->writeLine("E",'$email' ,"El usuario o la contraseña son incorrectos y se ha bloqueado el usuario por fallar en la identificación varias veces");
            }else{
                echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); window.location='/inicio.php'</script>";
                $log->writeLine("E",'$email' ,"El usuario o la contraseña son incorrectos");
=======
                $_SESSION["login_attempts"] = 0;

                $log->writeLine("I", "Todo correcto prueba domingo");
            }else{
                //si no existe
                $_SESSION["login_attempts"] += 1; //incrementear contador de intentos fallidos

                if ($_SESSION["login_attempts"] > 2){
                    //se han hecho 3 intentos incorrectos --> bloquear 5 minutos
                    $_SESSION["locked"] = time(); //bloquear y guardar tiempo
                    echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); </script>";
                    echo "<script>alert('Ha superado el límite de intentos fallidos, por favor, inténtelo de nuevo en unos instantes.');window.location='/inicio.php'</script>";
                }else{
                    echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); window.location='/inicio.php'</script>";
                }
                
>>>>>>> 57cac30f944b979387f5ab136eea0f2ce3c041c4
            }
        }  
    }
    unset($_SESSION["_token"]);
}

$log->close();
?>