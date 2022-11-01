<?php

include 'data.php';


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$fone = $_POST['fone'];


$sql = "INSERT INTO `cliente2` values (default,'$nome', '$email', '$senha', '$fone')";

$result = mysqli_query($con,$sql);

if($result){
    echo "Dados cadastrados";
}else{
    die(mysqli_error($con));
}

?>