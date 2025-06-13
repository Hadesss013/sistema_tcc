<!-- agendar_tcc.php -->
<?php
require 'conexao.php';
$professores = $pdo->query('SELECT id, nome FROM professores')->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Agendar TCC</title>
    <style>
        /* Mesmo estilo do anterior para padronizar */
    </style>
</head>
<body>
<div class="container">
    <h2>Agendar Apresentação</h2>
    <form action="salvar_agendamento.php" method="POST">
        <input type="datetime-local" name="data_hora" required>
        <input type="text" name="local" placeholder="Local" required>
        <select name="orientador_id" required>
            <option value="">Selecione o Professor Orientador</option>
            <?php foreach($professores as $prof): ?>
                <option value="<?= $prof['id'] ?>"><?= htmlspecialchars($prof['nome']) ?></option>
            <?php endforeach; ?>
        </select>
        <select name="convidado1_id">
            <option value="">Selecione o Professor Co-orientador (opcional)</option>
            <?php foreach($professores as $prof): ?>
                <option value="<?= $prof['id'] ?>"><?= htmlspecialchars($prof['nome']) ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="cidade" placeholder="Cidade">
        <button class="btn" type="submit">Agendar</button>
    </form>
</div>
</body>
</html>
