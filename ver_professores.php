<?php
include("conexao.php");
 
$resultado = mysqli_query($conexao, "SELECT * FROM professores");
 
echo "<h2>Lista de Professores</h2>";
while($row = mysqli_fetch_assoc($resultado)){
    echo "ID: ".$row['id']." - Nome: ".$row['nome']." - Área: ".$row['area']."<br>";
}
echo "<a href='index.php'>Voltar</a>";
?>