<?php
require 'conexao.php';

$nome = $_POST['nome'] ?? '';
$area = $_POST['area'] ?? '';

if ($nome && $area) {
    $stmt = $pdo->prepare('INSERT INTO professores (nome, area) VALUES (?, ?)');
    if ($stmt->execute([$nome, $area])) {
        echo "<div style='background:#d4edda;color:#155724;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>Professor cadastrado com sucesso!<br>Redirecionando...<br><a href='index.php'>Voltar</a></div>";
        echo "<script>setTimeout(function(){window.location='ver_professores.php';}, 2000);</script>";
    } else {
        echo "<div style='background:#f8d7da;color:#721c24;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>Erro ao cadastrar professor.<br><a href='index.php'>Voltar</a></div>";
    }
} else {
    echo "<div style='background:#f8d7da;color:#721c24;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>Dados incompletos.<br><a href='index.php'>Voltar</a></div>";
}
?>