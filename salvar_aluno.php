<?php

include("conexao.php");
 
$nome = $_POST['nome'];

$idade = $_POST['idade'];

$curso = $_POST['curso'];
 
$sql = "INSERT INTO alunos (nome, idade, curso) VALUES ('$nome', '$idade', '$curso')";
 
if(mysqli_query($conexao, $sql)){

    echo "Aluno cadastrado com sucesso! <a href='index.php'>Voltar</a>";

} else {

    echo "Erro: " . mysqli_error($conexao);

}

?>

 