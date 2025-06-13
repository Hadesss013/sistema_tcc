<?php
require 'conexao.php';
if (isset($_POST['id'], $_POST['status']) && in_array($_POST['status'], ['APROVADO','REPROVADO'])) {
    $stmt = $pdo->prepare('UPDATE alunos SET status = ? WHERE id = ?');
    $stmt->execute([$_POST['status'], $_POST['id']]);
}
header('Location: ver_alunos.php');
exit;
