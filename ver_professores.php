<?php
require 'conexao.php';

$resultado = $pdo->query('SELECT * FROM professores');

echo "<h2>Lista de Professores</h2>";
foreach($resultado as $row){
    echo "ID: ".$row['id']." - Nome: ".$row['nome']." - Área: ".$row['area']." ";
    echo "<form method='POST' action='remover_professor.php' style='display:inline;'><input type='hidden' name='id' value='".$row['id']."'><button type='submit' onclick=\"return confirm('Remover este professor?')\" style='background:#dc3545;color:#fff;border:none;padding:4px 10px;border-radius:4px;cursor:pointer;'>Remover</button></form><br>";
}
echo "<a href='index.php'>Voltar</a>";
?>