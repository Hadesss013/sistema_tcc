<?php
require 'conexao.php';
if (isset($_POST['id'])) {
    $stmt = $pdo->prepare('DELETE FROM agenda_tcc WHERE id = ?');
    $stmt->execute([$_POST['id']]);
}
header('Location: ver_agendamentos.php');
exit;
