<<?php
require 'conexao.php'; // conexão PDO com o banco de dados

// Busca os tipos de TCC
$tiposStmt = $pdo->query("SELECT id, nome FROM tipo_tcc");
$tipos = $tiposStmt->fetchAll(PDO::FETCH_ASSOC);

// Busca os professores
$profStmt = $pdo->query("SELECT id, nome FROM professor");
$professores = $profStmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar TCC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,.1);
        }
        h2 {
            text-align: center;
            color: #007bff;
        }
        label {
            font-weight: bold;
            margin-top: 15px;
            display: block;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #007bff;
            color: white;
            margin-top: 10px;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Cadastrar TCC</h2>
    <form action="salvar_tcc.php" method="POST">
        <label for="titulo">Título do TCC:</label>
        <input type="text" name="titulo" id="titulo" required>

        <label for="tipo_tcc_id">Tipo de TCC:</label>
        <select name="tipo_tcc_id" id="tipo_tcc_id" required>
            <option value="">Selecione</option>
            <?php foreach ($tipos as $tipo): ?>
                <option value="<?= $tipo['id'] ?>"><?= htmlspecialchars($tipo['nome']) ?></option>
            <?php endforeach; ?>
        </select>

        <label for="professor_orientador_id">Professor Orientador:</label>
        <select name="professor_orientador_id" id="professor_orientador_id" required>
            <option value="">Selecione</option>
            <?php foreach ($professores as $prof): ?>
                <option value="<?= $prof['id'] ?>"><?= htmlspecialchars($prof['nome']) ?></option>
            <?php endforeach; ?>
        </select>

        <button class="btn" type="submit">Salvar TCC</button>
    </form>
</div>
</body>
</html>
