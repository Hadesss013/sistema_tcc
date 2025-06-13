<?php
require 'conexao.php';
if (isset($_POST['id'])) {
    $stmt = $pdo->prepare('DELETE FROM alunos WHERE id = ?');
    $stmt->execute([$_POST['id']]);
}
header('Location: ver_alunos.php');
exit;
