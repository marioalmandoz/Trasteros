<?php 
ini_set("session.cookie_httponly", True);//httponly flag
//iniciar sesion y conectarse
session_start();
//denegar xframe options
header('X-Frame-Options: SAMEORIGIN');
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
if($_POST["_token"] == $_SESSION["_token"]){
    echo "Hola";
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


        //select
        //crear consulta parametrizada
        //preparar

        if (!($sentencia = $conn->prepare("SELECT * FROM Usuario WHERE email = ?"))) {
            echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
            $log->writeLine("W",'$email', "Falló la preparacion al identificarse");
        }

        //comprobar parametros
        if (!$sentencia->bind_param("s", $email)) {
            $_SESSION["login_attempts"] += 1; //incrementear contador de intentos fallidos

            echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
            $log->writeLine("W",'$email', "Falló la vinculacion de parametros al identificarse");
        }
        //ejecutar
        if (!$sentencia->execute()) {
            echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
            echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); window.location='/inicio.php'</script>";
            $_SESSION["login_attempts"] += 1; //incrementear contador de intentos fallidos
            $log->writeLine("W",'$email', "Falló la ejecución al identificarse");

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

                $_SESSION["timeout"] = time();//guardar el tiempo para el timeout 
                                                //(tiempo maximo de sesion)

                $_SESSION["login_attempts"] = 0;

                $log->writeLine("I",'$email',"Se ha identificado el usuario con exito");
            }else{
                $_SESSION["login_attempts"] += 1; //incrementear contador de intentos fallidos

                if ($_SESSION["login_attempts"] > 2){
                    //se han hecho 3 intentos incorrectos --> bloquear 5 minutos
                    $_SESSION["locked"] = time(); //bloquear y guardar tiempo
                    echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); </script>";
                    echo "<script>alert('Ha superado el límite de intentos fallidos, por favor, inténtelo de nuevo en unos instantes.');window.location='/inicio.php'</script>";
                    $log->writeLine("E",'$email', "El usuario o la contraseña no son correctos en 3 intentos, bloqueo de 5 minutos");
                }else{
                    echo "<script>alert('No se puede identificar debido a que la contraseña o el usuario son incorrectos.'); window.location='/inicio.php'</script>";
                    $log->writeLine("E",'$email', "El usuario o la contraseña no son correctos");
                }

            }
        }
    }
    unset($_SESSION["_token"]);
}

$log->close();
?>