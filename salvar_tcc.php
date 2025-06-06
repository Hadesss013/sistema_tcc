<?php
require 'conexao.php';

$titulo = $_POST['titulo'];
$tipo = $_POST['tipo_tcc_id'];
$orientador = $_POST['professor_orientador_id'];

$sql = "INSERT INTO tcc (titulo, tipo_tcc_id, professor_orientador_id) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$titulo, $tipo, $orientador]);

header("Location: index.php");
exit;
