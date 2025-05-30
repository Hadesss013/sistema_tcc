<?php
$servername = "localhost";
$username = "root"; // ajuste conforme seu ambiente
$password = ""; // ajuste conforme sua senha
$dbname = "sistema_tcc"; // ajuste conforme o nome do seu banco
 
// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Checa a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>