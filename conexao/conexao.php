<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudPHP";

$conn = new mysqli("localhost", "root", "", "crudPHP");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>
