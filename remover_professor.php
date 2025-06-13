<?php
require 'conexao.php';
if (isset($_POST['id'])) {
    $stmt = $pdo->prepare('DELETE FROM professores WHERE id = ?');
    $stmt->execute([$_POST['id']]);
}
header('Location: ver_professores.php');
exit;
