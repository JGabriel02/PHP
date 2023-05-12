<?php

function cadastrarUsuario($nome, $email, $senha, $dataNascimento) {
    // Criar a conexão com o banco de dados
    $conn = mysqli_connect("localhost", "root", "", "cadastro");

    // Verificar se houve algum erro na conexão com o banco de dados
    if (!$conn) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Escapar caracteres especiais para evitar SQL injection
    $nome = mysqli_real_escape_string($conn, $nome);
    $email = mysqli_real_escape_string($conn, $email);
    $senha = mysqli_real_escape_string($conn, $senha);
    $dataNascimento = mysqli_real_escape_string($conn, $dataNascimento);

    // Gerar hash da senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Montar a consulta SQL para inserir um novo usuário na tabela de usuários
    $sql = ("INSERT INTO ususarios (nome, email, senha, data_nasc) VALUES ('$nome', '$email', '$senhaHash', '$dataNascimento')");

    // Executar a consulta SQL
    if (mysqli_query($conn, $sql)) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . mysqli_error($conn);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);
}


?>