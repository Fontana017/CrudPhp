<?php
$host = 'localhost';
$db   = 'nome_do_banco';
$user = 'usuario';
$pass = 'senha';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Ativa erros como exceções
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Retorna resultados como array associativo
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Desativa prepared statements emulados
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die('Erro na conexão: ' . $e->getMessage());
}
?>
