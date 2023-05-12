<!DOCTYPE html>
<html>
<head>
  <title>Cadastrar usuário</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <div class="container">
    <h1>Cadastrar usuário</h1>
    <form method="post" action="processar_cadastro.php">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
      </div>
      <div class="form-group">
        <label for="data_nascimento">Data de nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" required>
      </div>
      <button type="submit" class="btn">Cadastrar</button>
    </form>
  </div>
</body>
</html>
