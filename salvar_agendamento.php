<?php
require 'conexao.php';

$data_hora = $_POST['data_hora'] ?? '';
$local = $_POST['local'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$orientador_id = $_POST['orientador_id'] ?? null;
$convidado1_id = $_POST['convidado1_id'] ?? null;
if ($convidado1_id === '') $convidado1_id = null;

if ($data_hora && $local && $orientador_id) {
    $stmt = $pdo->prepare('INSERT INTO agenda_tcc (data_hora, local, cidade, orientador_id, convidado1_id) VALUES (?, ?, ?, ?, ?)');
    if ($stmt->execute([$data_hora, $local, $cidade, $orientador_id, $convidado1_id])) {
        echo "<div style='background:#d4edda;color:#155724;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>Agendamento realizado com sucesso!<br>Redirecionando...<br><a href='index.php'>Voltar</a></div>";
        echo "<script>setTimeout(function(){window.location='index.php';}, 2000);</script>";
    } else {
        echo "<div style='background:#f8d7da;color:#721c24;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>Erro ao agendar.<br><a href='index.php'>Voltar</a></div>";
    }
} else {
    echo "<div style='background:#f8d7da;color:#721c24;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>Preencha todos os campos obrigatórios.<br><a href='index.php'>Voltar</a></div>";
}
?>
