<?php
require_once('connect.php');

$login = filter_input(INPUT_GET, 'login', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_GET, 'senha');

if($login==""){
    echo "Nenhum dos campos pode ser deixado vazio!";
}else if($senha==""){
    echo "Nenhum dos campos pode ser deixado vazio!";
}else{
    $logar = "SELECT nome, email, senha FROM usuarios WHERE email='$login' and senha='$senha'";
    $registrado = mysqli_query($conn, $logar);
    if($registrado){
        header("Location: dashboard.html");
        $logado = "INSERT INTO logados (nome, email, ultimo_log)VALUES('$logar[0]', '$logar[1]', NOW())";
        $logados = mysqli_query($conn, $logado);
    }else{
        header("Location: cadastro.php");
    }
}







?>