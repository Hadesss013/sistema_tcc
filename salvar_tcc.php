<?php
require 'conexao.php';

$titulo = $_POST['titulo'] ?? '';
$tipo = $_POST['tipo_tcc_id'] ?? '';
$orientador = $_POST['professor_orientador_id'] ?? '';

if ($titulo && $tipo && $orientador) {
    $sql = "INSERT INTO tcc (titulo, tipo_tcc_id, professor_orientador_id) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$titulo, $tipo, $orientador])) {
        echo "<div style='background:#d4edda;color:#155724;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>TCC cadastrado com sucesso!<br>Redirecionando...<br><a href='index.php'>Voltar</a></div>";
        echo "<script>setTimeout(function(){window.location='ver_tcc.php';}, 2000);</script>";
    } else {
        echo "<div style='background:#f8d7da;color:#721c24;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>Erro ao cadastrar TCC.<br><a href='index.php'>Voltar</a></div>";
    }
} else {
    echo "<div style='background:#f8d7da;color:#721c24;padding:20px;border-radius:8px;margin:30px auto;max-width:400px;text-align:center;'>Dados incompletos.<br><a href='index.php'>Voltar</a></div>";
}
?>
