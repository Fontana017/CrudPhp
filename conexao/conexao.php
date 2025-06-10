<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudPHP";

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Validação de conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>