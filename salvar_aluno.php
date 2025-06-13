<?php
require 'conexao.php';

$nome = $_POST['nome'] ?? '';
$idade = $_POST['idade'] ?? '';
$curso = $_POST['curso'] ?? '';

if ($nome && $idade && $curso) {
    $stmt = $pdo->prepare('INSERT INTO alunos (nome, idade, curso) VALUES (?, ?, ?)');
    if ($stmt->execute([$nome, $idade, $curso])) {
        echo "<div style='background:#d4edda;color:#155724;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>Aluno cadastrado com sucesso!<br>Redirecionando...<br><a href='index.php'>Voltar</a></div>";
        echo "<script>setTimeout(function(){window.location='ver_alunos.php';}, 2000);</script>";
    } else {
        echo "<div style='background:#f8d7da;color:#721c24;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>Erro ao cadastrar aluno.<br><a href='index.php'>Voltar</a></div>";
    }
} else {
    echo "<div style='background:#f8d7da;color:#721c24;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>Dados incompletos.<br><a href='index.php'>Voltar</a></div>";
}
?>

