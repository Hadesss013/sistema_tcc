<!-- ver_tcc.php -->
<?php
require 'conexao.php'; // sua conexão com o banco

$sql = "SELECT tcc.id, tcc.titulo, tipo_tcc.nome AS tipo, professor.nome AS orientador
        FROM tcc
        JOIN tipo_tcc ON tcc.tipo_tcc_id = tipo_tcc.id
        JOIN professor ON tcc.professor_orientador_id = professor.id";
$stmt = $pdo->query($sql);
$tccs = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>TCCs Cadastrados</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f0f2f5; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { padding: 12px; border: 1px solid #ccc; }
        th { background: #007bff; color: white; }
    </style>
</head>
<body>
    <h2>Lista de TCCs</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Tipo</th>
            <th>Professor Orientador</th>
        </tr>
        <?php foreach ($tccs as $tcc): ?>
        <tr>
            <td><?= $tcc['id'] ?></td>
            <td><?= htmlspecialchars($tcc['titulo']) ?></td>
            <td><?= $tcc['tipo'] ?></td>
            <td><?= $tcc['orientador'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
