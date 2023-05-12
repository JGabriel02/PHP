<?php
// Inclui o arquivo de conexão com o banco de dados
include 'Banco.php';
include 'cadastrar.php';

// Obtém os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data_nascimento = $_POST['data_nascimento'];

// Gera o hash da senha
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Chama a função cadastrarUsuario() para inserir os dados no banco de dados
cadastrarUsuario($nome, $email, $senha, $dataNascimento);

// Redireciona o usuário de volta para o formulário de cadastro
header('Location: index.php?sucesso=cadastro');
exit();
?>
