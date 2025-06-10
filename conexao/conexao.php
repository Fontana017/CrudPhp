<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudPHP";

<<<<<<< HEAD
$conn = new mysqli("localhost", "root", "", "crudPHP");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>
=======
//Criando Conexão
$conn = new mysqli($serverName, $userName, $password, $dbName);

//Validação de Conexão
if ($conn->connect_error){
    echo "Conexão Falhou";
}


?>
>>>>>>> 4fada993cb0d3e682025c0791b907505a03dffb4
