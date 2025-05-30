<h2>Cadastrar TCC</h2>
<form action="salvar_tcc.php" method="POST">
    Local: <input type="text" name="local" required><br>
    Data e Hora: <input type="datetime-local" name="data_hora" required><br>
    Professor Orientador ID: <input type="number" name="prof_orientador_id" required><br>
    Professor Convidado 1 ID: <input type="number" name="prof_convidado1_id"><br>
    Professor Convidado 2 ID: <input type="number" name="prof_convidado2_id"><br>
    Aluno 1 ID: <input type="number" name="aluno1_id" required><br>
    Aluno 2 ID: <input type="number" name="aluno2_id"><br>
    Aluno 3 ID: <input type="number" name="aluno3_id"><br>
    Nota Final: <input type="number" step="0.01" name="nota_final"><br>
<input type="submit" value="Salvar">
</form>