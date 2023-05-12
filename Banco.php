<?php
// Usando mysqli_connect
$host = "localhost";
$user = "root";
$password = "";
$database = "cadastro";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}


?>