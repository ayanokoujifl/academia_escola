<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de clientes</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../styles/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../styles/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../styles/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="../styles/assets/favicon/site.webmanifest">
  <link rel="stylesheet" type="text/css" href="../styles/estilização/BodyAll.css">
  <link rel="stylesheet" type="text/css" href="../styles/estilização/NavBar.css">
  <link rel="stylesheet" type="text/css" href="../styles/estilização/Form.css">
</head>

<body>
  <header>
    <nav>
      <h1>Academia Boa Forma</h1>
      <a href="http://github.com/ayanokoujifl" target="_blank" class="git">
        <img src="../styles/assets/git.svg" alt='GitHubIcon'>
        <p>Luís Gustavo</p>
        </div>
      </a>
      </div>
    </nav>
  </header>
  <div class="align-form">
    <h2>
      <i style="margin: 0px;"> Cadastro de clientes</i>
    </h2>
    <form action="cadastroCliente.php" method="POST" class="form">
      <label for="input_nome" class="lbl"> Nome: </label>
      <input type="text" name="input_nome" id="input_nome">

      <label for="input_cpf" class="lbl"> CPF: </label>
      <input type="text" name="input_cpf" id="input_cpf">

      <label for="input_idade" class="lbl"> Idade: </label>
      <input type="text" name="input_idade" id="input_idade">

      <label for="input_modalidades" class="lbl"> Modalidades: </label>
      <input type="text" name="input_modalidades" id="input_modalidades">

      <label for="input_mensalidade" class="lbl"> Mensalidades: </label>
      <input type="text" name="input_mensalidade" id="input_mensalidade">
      <button class="save-button">Salvar</button>
    </form>
    <a href="../index.html" class="inicio">Inicio </a>
  </div>
</body>

</html>