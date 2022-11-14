<?php

class Log {

    private $fileLog;
    private $path = "/var/log/html/"; 
    private $usuario = "usuario";

    function __construct($path)
    {
        $this->fileLog = fopen($path, "a+");
    }

    function writeLine($type,$user, $message){
        $date = new DateTime();
        fputs($this->fileLog, "[".$type."][".$user."][".$date->format("d-m-Y H:i:s")."]: ". $message . "\n");
    }

    function close(){
        fclose($this->fileLog);
    }

}
/*
$log = new Log("error.txt");

$log->writeLine("E",'$usuario' ,"no se ha registrado correctamente");
$log->writeLine("I",'$usuario',"Todo correcto");

$log->close();
*/
?>