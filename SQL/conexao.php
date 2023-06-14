<?php
$servername = "localhost"; // Nome do servidor
$username = "seu_usuario"; // Nome de usuário do banco de dados
$password = "sua_senha"; // Senha do banco de dados
$dbname = "seu_banco_de_dados"; // Nome do banco de dados

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão estabelecida com sucesso!";
} catch(PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}
?>