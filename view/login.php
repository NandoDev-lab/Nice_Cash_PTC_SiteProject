<?php

use Random\Engine;

require_once('connect.php');


$nome = filter_input(INPUT_GET, 'nome', FILTER_DEFAULT);
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL); 
$senha = filter_input(INPUT_GET, 'senha');
$confsenha = filter_input(INPUT_GET, 'confsenha');

$registrar = "INSERT INTO usuarios(nome, email, senha, data_cadastro)VALUES('$nome', '$email', '$senha', NOW())";
$registrado = mysqli_query($conn, $registrar);

if(mysqli_insert_id($conn)){
    header("Location: /index.html");
}else{
    echo "Algo deu errado no registro, tente novamente.";
}




















?>