<?php
    //ini_set("session.cookie_httponly", True);//httponly flag
    // Iniciamos la sesion
    session_start();
    //denegar xframe options
    //header('X-Frame-Options: SAMEORIGIN');
     //eliminar header x-powered-by
    //header_remove('x-powered-by');

    session_start();
    //Establecer tiempo maximo
    $inactividad = 900; //tiempo maximo = 15 minutos (900s)

    //log
    include("log.php");
    $log = new Log("log.txt");

    //Comprobar si existe la variable
    if(isset($_SESSION["timeout"])){
        //comprobar cuanto tiempo ha pasado
        $duracionSesion = time() - $_SESSION["timeout"];
        if($duracionSesion > $inactividad){
            //ha pasado el tiempo maximo --> cerrar sesion
            $log->writeLine($log->getRealIP(),"C", $_SESSION["email"] ,"Se ha cerrado la sesión por inactividad");
            echo "<script>alert('Se ha alcanzado el tiempo máximo de inactividad. Por favor, inicia sesión de nuevo.');window.location='/cerrarsesion.php'</script>";

            //echo "<script>alert('Se ha alcanzado la duración máxima de la sesión. Por favor, inicia sesión de nuevo.'); window.location='/cerrarsesion.php;</script>";
            //include("cerrarsesion.php");
        }else{
            //no ha alcanzado el tiempo maximo
            //ha cambiado de pagina o ha recargado antes de alcanzar el maximo, entonces ha habido actividad --> reiniciar contador
            $_SESSION["timeout"] = time(); //guardar tiempo actual
        }
    }else{
        //nada
    }
?>