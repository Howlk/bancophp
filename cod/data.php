<?php
 $host = "127.0.0.1";
 $username = "root";
 $password = "";
 $database = "xampptente";


 $con = new mysqli($host, $username, $password, $database);



 if($con){
     echo "Conectado";
 }else{
     echo "Erro ao conectar";
 }

?>