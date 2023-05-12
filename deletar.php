<?php
function deletarUsuario($id) {
    // Criar a conexão com o banco de dados
    $conn = mysqli_connect("localhost", "root", "", "cadastro");

    // Verificar se houve algum erro na conexão com o banco de dados
    if (!$conn) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Escapar caracteres especiais para evitar SQL injection
    $id = mysqli_real_escape_string($conn, $id);

    // Montar a consulta SQL para remover o usuário da tabela de usuários
    $sql = "DELETE FROM ususarios WHERE id='$id'";

    // Executar a consulta SQL
    if (mysqli_query($conn, $sql)) {
        echo "Usuário removido com sucesso!";
    } else {
        echo "Erro ao remover usuário: " . mysqli_error($conn);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);
}
deletarUsuario(2);

?>