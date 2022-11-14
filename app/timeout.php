<?php
    //ini_set("session.cookie_httponly", True);//httponly flag
    // Iniciamos la sesion
    session_start();
    //denegar xframe options
    //header('X-Frame-Options: SAMEORIGIN');

    session_start();
    //Establecer tiempo maximo
    $inactividad = 30; //tiempo maximo = 15 minutos

    //log
    include("log.php");
    $log = new Log("log.txt");

    //Comprobar si existe la variable
    if(isset($_SESSION["timeout"])){
        //comprobar cuanto tiempo ha pasado
        $duracionSesion = time() - $_SESSION["timeout"];
        if($duracionSesion > $inactividad){
            $log->writeLine("W", '$_SESSION["email"]' ,"Se han cerrado la sesión por inactividad");
            echo "<script>alert('Se ha alcanzado la duración máxima de la sesión. Por favor, inicia sesión de nuevo.');
            window.location='/cerrarsesion.php;</script>";
            //include("cerrarsesion.php");
        }
    }else{
        //no hacer nada
        //
    }
?>