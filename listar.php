<?php  
$conn = mysqli_connect("localhost", "root", "", "cadastro");

// Verificar se houve algum erro na conexão com o banco de dados
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
$sql = "SELECT * FROM ususarios";
$resultado = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($resultado)) {
    echo $row["id"] . " " . $row["nome"] . "<br>";
}




?>