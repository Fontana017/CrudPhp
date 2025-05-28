<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudPHP";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configurar o modo de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado com sucesso!";
} 
catch (PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}
?>
