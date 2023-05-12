<?php
function editarUsuario($id, $nome, $email, $senha, $dataNascimento) {
    // Criar a conexão com o banco de dados
    $conn = mysqli_connect("localhost", "root", "", "cadastro");

    // Verificar se houve algum erro na conexão com o banco de dados
    if (!$conn) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Escapar caracteres especiais para evitar SQL injection
    $id = mysqli_real_escape_string($conn, $id);
    $nome = mysqli_real_escape_string($conn, $nome);
    $email = mysqli_real_escape_string($conn, $email);
    $senha = mysqli_real_escape_string($conn, $senha);
    $dataNascimento = mysqli_real_escape_string($conn, $dataNascimento);

    // Gerar hash da nova senha, se houver
    $senhaHash = '';
    if ($senha != '') {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $senhaHash = ", senha='$senhaHash'";
    }

    // Montar a consulta SQL para atualizar os dados do usuário na tabela de usuários
    $sql = "UPDATE ususarios SET nome='$nome', email='$email'$senhaHash, data_nasc='$dataNascimento' WHERE id='$id'";

    // Executar a consulta SQL
    if (mysqli_query($conn, $sql)) {
        echo "Usuário atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar usuário: " . mysqli_error($conn);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);
}


editarUsuario(2, "Pedro", "pedro@example.com", "4243553", "1980-01-01");


?>