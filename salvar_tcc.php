<?php
include("conexao.php");
 
$local = $_POST['local'];
$data_hora = $_POST['data_hora'];
$prof_orientador_id = $_POST['prof_orientador_id'];
$prof_convidado1_id = $_POST['prof_convidado1_id'];
$prof_convidado2_id = $_POST['prof_convidado2_id'];
$aluno1_id = $_POST['aluno1_id'];
$aluno2_id = $_POST['aluno2_id'];
$aluno3_id = $_POST['aluno3_id'];
$nota_final = $_POST['nota_final'];
 
$sql = "INSERT INTO tccs (local, data_hora, prof_orientador_id, prof_convidado1_id, prof_convidado2_id, aluno1_id, aluno2_id, aluno3_id, nota_final) 
VALUES ('$local', '$data_hora', '$prof_orientador_id', '$prof_convidado1_id', '$prof_convidado2_id', '$aluno1_id', '$aluno2_id', '$aluno3_id', '$nota_final')";
 
if(mysqli_query($conexao, $sql)){
    echo "TCC cadastrado com sucesso! <a href='index.php'>Voltar</a>";
} else {
    echo "Erro: " . mysqli_error($conexao);
}
?>