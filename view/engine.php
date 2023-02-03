<?php
$nome = filter_input(INPUT_GET, 'nome', FILTER_DEFAULT);
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL); 
$senha = filter_input(INPUT_GET, 'senha');
$confsenha = filter_input(INPUT_GET, 'confsenha');

echo "Nome: $nome<br>";
echo "E-mail: $email<br>";
echo "Senha: $senha<br>";
echo "confirmação da senha: $confsenha<br>";

?>