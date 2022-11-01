<?php
    $host = "192.168.28.95";
    $username = "devweb";
    $password = "suporte@22";
    $database = "projeto";

    $con = new mysqli($host, $username, $password, $database);

    if($con){
        echo "Conectado";
    }else{
        echo "Erro ao conectar";
    }

?>