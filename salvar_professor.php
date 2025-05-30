<?php
include("conexao.php");
 
$nome = $_POST['nome'];
$area = $_POST['area'];
 
$sql = "INSERT INTO professores (nome, area) VALUES ('$nome', '$area')";
 
if(mysqli_query($conexao, $sql)){
    echo "Professor cadastrado com sucesso! <a href='index.php'>Voltar</a>";
} else {
    echo "Erro: " . mysqli_error($conexao);
}
?>