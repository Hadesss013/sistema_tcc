<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Agendamento de TCC</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eef1f5;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #007BFF;
      color: white;
      padding: 20px;
      text-align: center;
    }
    .container {
      max-width: 800px;
      margin: 40px auto;
      background-color: white;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
    }
    h1 {
      margin-bottom: 30px;
    }
    .menu {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .menu a {
      display: block;
      text-decoration: none;
      background-color: #007BFF;
      color: white;
      padding: 14px;
      border-radius: 5px;
      text-align: center;
      transition: background 0.3s;
      font-size: 16px;
    }
    .menu a:hover {
      background-color: #0056b3;
    }
    footer {
      text-align: center;
      padding: 20px;
      font-size: 14px;
      color: #666;
    }
  </style>
</head>
<body>

<header>
  <h1>Sistema de Agendamento de TCC</h1>
</header>

<div class="container">
  <div class="menu">
    <a href="cadastrar_tcc.php">➕ Cadastrar Novo TCC</a>
    <a href="ver_tcc.php">📋 Ver TCCS Marcados</a>
    <a href="cadastrar_aluno.php">👨‍🎓 Cadastrar Aluno</a>
    <a href="cadastrar_professor.php">👩‍🏫 Cadastrar Professor</a>
    <a href="ver_alunos.php">🔎 Ver Alunos</a>
    <a href="ver_professores.php">🔎 Ver Professores</a>
    <a href="ver_tccs.php">🔎 Ver TCCS</a>
  </div>
</div>

<footer>
  &copy; 2025 Sistema de Agendamento de TCC
</footer>

</body>
</html>
