<?php
require 'conexao.php';

$resultado = $pdo->query('SELECT * FROM alunos');

echo "<h2>Lista de Alunos</h2>";
foreach($resultado as $row){
    echo "ID: ".$row['id']." - Nome: ".$row['nome']." - Idade: ".$row['idade']." - Curso: ".$row['curso'];
    // Exibe o status do aluno, se existir
    if (isset($row['status'])) {
        echo " - Status: <strong>" . htmlspecialchars($row['status']) . "</strong>";
    }
    echo " ";
    echo "<form method='POST' action='remover_aluno.php' style='display:inline;'><input type='hidden' name='id' value='".$row['id']."'><button type='submit' onclick=\"return confirm('Remover este aluno?')\" style='background:#dc3545;color:#fff;border:none;padding:4px 10px;border-radius:4px;cursor:pointer;'>Remover</button></form> ";
    echo "<form method='POST' action='status_aluno.php' style='display:inline;'><input type='hidden' name='id' value='".$row['id']."'>";
    echo "<select name='status' onchange='this.form.submit()'>";
    echo "<option value=''>Status</option>";
    echo "<option value='APROVADO'" . (isset($row['status']) && $row['status']==='APROVADO' ? ' selected' : '') . ">APROVADO</option>";
    echo "<option value='REPROVADO'" . (isset($row['status']) && $row['status']==='REPROVADO' ? ' selected' : '') . ">REPROVADO</option>";
    echo "</select></form><br>";
}
echo "<a href='index.php'>Voltar</a>";
?>