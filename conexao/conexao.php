<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudPHP";

//Criando Conexão
$conn = new mysqli($serverName, $userName, $password, $dbName);

//Validação de Conexão
if ($conn->connect_error){
    echo "Conexão Falhou";
}


?>