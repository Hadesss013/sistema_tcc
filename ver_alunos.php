<?php
include("conexao.php");
 
$resultado = mysqli_query($conexao, "SELECT * FROM alunos");
 
echo "<h2>Lista de Alunos</h2>";
while($row = mysqli_fetch_assoc($resultado)){
    echo "ID: ".$row['id']." - Nome: ".$row['nome']." - Idade: ".$row['idade']." - Curso: ".$row['curso']."<br>";
}
echo "<a href='index.php'>Voltar</a>";
?>