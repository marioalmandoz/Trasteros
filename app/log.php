<?php

class Log {

    private $fileLog;
    private $path = "/var/log/html/"; 
    private $ipaddress = "";

    function __construct($path)
    {
        $this->fileLog = fopen($path, "a+");
    }
    

    //private $new_ip = get_client_ip();
    function writeLine($new_ip,$type,$user, $message){
        $date = new DateTime();
        fputs($this->fileLog, "[".$new_ip."][".$type."][".$user."][".$date->format("d-m-Y H:i:s")."]: ". $message . "\n");
    }

    function close(){
        fclose($this->fileLog);
    }
    function getRealIP(){

        if (isset($_SERVER["HTTP_CLIENT_IP"])){

            return $_SERVER["HTTP_CLIENT_IP"];

        }elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){

            return $_SERVER["HTTP_X_FORWARDED_FOR"];

        }elseif (isset($_SERVER["HTTP_X_FORWARDED"])){

            return $_SERVER["HTTP_X_FORWARDED"];

        }elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])){

            return $_SERVER["HTTP_FORWARDED_FOR"];

        }elseif (isset($_SERVER["HTTP_FORWARDED"])){

            return $_SERVER["HTTP_FORWARDED"];

        }else{

            return $_SERVER["REMOTE_ADDR"];

        }
    } 

}

//$log = new Log("error.txt");
//$usuario = "mario";

//$log->writeLine($log->getRealIP(),"E",$usuario ,"no se ha registrado correctamente");
//$log->writeLine("I",'$usuario',"Todo correcto");

//$log->close();
//date("l, F jS Y ")
//$date->format("d-m-Y H:i:s")
//*/
?>