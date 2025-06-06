<!-- agendar_tcc.php -->
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
        <input type="text" name="prof_orientador" placeholder="Professor Orientador" required>
        <input type="text" name="prof_coorientador" placeholder="Co-orientador">
        <input type="text" name="cidade" placeholder="Cidade">
        <button class="btn" type="submit">Agendar</button>
    </form>
</div>
</body>
</html>
