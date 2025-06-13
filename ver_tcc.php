<!-- ver_tcc.php -->
<?php
// Inclui o arquivo de conexão com o banco de dados usando PDO
require 'conexao.php'; // sua conexão com o banco

// Monta a consulta SQL para buscar os TCCs cadastrados, trazendo o título, tipo e nome do orientador
$sql = "SELECT tcc.id, tcc.titulo, tipo_tcc.nome AS tipo, professores.nome AS orientador
        FROM tcc
        JOIN tipo_tcc ON tcc.tipo_tcc_id = tipo_tcc.id
        JOIN professores ON tcc.professor_orientador_id = professores.id";
// Executa a consulta no banco
$stmt = $pdo->query($sql);
// Pega todos os resultados em um array
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
        .btn-remove { background: #dc3545; color: #fff; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer; }
        .btn-remove:hover { background: #a71d2a; }
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
            <th>Ações</th>
        </tr>
        <?php foreach ($tccs as $tcc): ?>
        <tr>
            <!-- Exibe os dados de cada TCC -->
            <td><?= $tcc['id'] ?></td>
            <td><?= htmlspecialchars($tcc['titulo']) ?></td>
            <td><?= $tcc['tipo'] ?></td>
            <td><?= $tcc['orientador'] ?></td>
            <td>
                <!-- Formulário para remover o TCC -->
                <form method="POST" action="remover_tcc.php" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $tcc['id'] ?>">
                    <button type="submit" class="btn-remove" onclick="return confirm('Remover este TCC?')">Remover</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
