<?php
require 'conexao.php';
$sql = "SELECT a.id, a.data_hora, a.local, a.cidade, p1.nome AS orientador, p2.nome AS coorientador
        FROM agenda_tcc a
        LEFT JOIN professor p1 ON a.orientador_id = p1.id
        LEFT JOIN professor p2 ON a.convidado1_id = p2.id
        ORDER BY a.data_hora DESC";
$stmt = $pdo->query($sql);
$agendas = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <title>Agendamentos de TCC</title>
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
    <h2>Agendamentos de TCC</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Data/Hora</th>
            <th>Local</th>
            <th>Cidade</th>
            <th>Orientador</th>
            <th>Co-orientador</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($agendas as $a): ?>
        <tr>
            <td><?= $a['id'] ?></td>
            <td><?= htmlspecialchars($a['data_hora']) ?></td>
            <td><?= htmlspecialchars($a['local']) ?></td>
            <td><?= htmlspecialchars($a['cidade']) ?></td>
            <td><?= htmlspecialchars($a['orientador']) ?></td>
            <td><?= htmlspecialchars($a['coorientador']) ?></td>
            <td>
                <form method="POST" action="remover_agendamento.php" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $a['id'] ?>">
                    <button type="submit" class="btn-remove" onclick="return confirm('Remover este agendamento?')">Remover</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href='index.php'>Voltar</a>
</body>
</html>
