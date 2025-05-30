<?php
require_once 'includes/db.php';
$sql = "SELECT
           a.id,
           a.data_hora,
           a.local,
           a.curso,
           a.cidade,
           a.nota_final,
           a.aprovado,
           t.nome AS tipo_tcc,
           p.nome AS orientador,
           c1.nome AS convidado1,
           c2.nome AS convidado2
       FROM agenda_tcc a
       LEFT JOIN tipo_tcc t ON a.tipo_tcc_id = t.id
       LEFT JOIN professor p ON a.orientador_id = p.id
       LEFT JOIN professor c1 ON a.convidado1_id = c1.id
       LEFT JOIN professor c2 ON a.convidado2_id = c2.id
       ORDER BY a.data_hora DESC";
$stmt = $pdo->query($sql);
$agendas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Lista de Agendas</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Agendas de TCC Cadastradas</h2>
<a href="nova_agenda.php"><button>Nova Agenda</button></a>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
<th>Data e Hora</th>
<th>Local</th>
<th>Curso</th>
<th>Cidade</th>
<th>Nota Final</th>
<th>Aprovado</th>
<th>Tipo TCC</th>
<th>Orientador</th>
<th>Convidado 1</th>
<?php
include("conexao.php");
 
$resultado = mysqli_query($conexao, "SELECT * FROM tccs");
 
echo "<h2>Lista de TCCs</h2>";
while($row = mysqli_fetch_assoc($resultado)){
    echo "ID: ".$row['id']." - Local: ".$row['local']." - Data/Hora: ".$row['data_hora']."<br>";
    echo "Professor Orientador ID: ".$row['prof_orientador_id']."<br>";
    echo "Convidado 1 ID: ".$row['prof_convidado1_id']."<br>";
    echo "Convidado 2 ID: ".$row['prof_convidado2_id']."<br>";
    echo "Alunos: ".$row['aluno1_id'].", ".$row['aluno2_id'].", ".$row['aluno3_id']."<br>";
    echo "Nota Final: ".$row['nota_final']."<hr>";
}
echo "<a href='index.php'>Voltar</a>";
?>