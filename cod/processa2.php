<?php

include 'conect.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo = 1;
$data = "Hoje";
$path = "Caminho";


$sql = "INSERT INTO `cliente` values (default,'$nome', '$email', '$senha','$tipo','$data','$path')";

$result = mysqli_query($con,$sql);

if($result){
    echo "Dados cadastrados";
}else{
    die(mysqli_error($con));
}

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