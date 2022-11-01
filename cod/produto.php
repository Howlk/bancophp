<?php

include 'conect.php';

$nome = $_POST['nome'];
$desc = $_POST['desc'];
$preco = $_POST['preco'];
$tipo = $_POST['tipo'];


$sql = "INSERT INTO `produto` values ('$nome', '$desc', '$preco','$tipo')";

$result = mysqli_query($con,$sql);

if($result){
    echo "Dados cadastrados";
}else{
    die(mysqli_error($con));
}



?>