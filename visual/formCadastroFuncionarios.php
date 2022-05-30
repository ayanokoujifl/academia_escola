<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../styles/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../styles/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../styles/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="../styles/assets/favicon/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="/academia/styles/estilização/BodyAll.css">
    <link rel="stylesheet" href="../styles/estilização/NavBar.css">
    <link rel="stylesheet" href="../styles/estilização/Form.css">
</head>

<body>
    <header class="header">
        <nav>
            <div class="nav-bar-content">
                <h1>Academia Boa Forma</h1>
                <a href="http://github.com/ayanokoujifl" target="_blank" class="nav-bar-link">
                    <div class="nav-bar-icon">
                        <img src="../styles/assets/git.svg" alt='GitHubIcon'>
                        <p class="nav-bar-align">Luís Gustavo</p>
                    </div>
                </a>
            </div>
        </nav>
    </header>

    <h1 class="titulo">
        Cadastro de funcionarios
    </h1>
    <form action="cadastroFuncionario.php" method="POST" style="display: block;  width: 90px; display: inline-block; ">
        <label class="lbl" for="input_nome"> Nome: </label>
        <input type="text" name="input_nome" id="input_nome" style="margin:5px;"><br>

        <label class="lbl" for="input_cpf"> CPF: </label>
        <input type="text" name="input_cpf" id="input_cpf" style="margin:5px;"><br>

        <label class="lbl" for="input_idade"> Data de nascimento: </label>
        <input type="text" name="input_idade" id="input_idade" style="margin:5px;"><br>

        <label class="lbl" for="input_salario"> Salario: </label>
        <input type="text" name="input_salario" id="input_salario" style="margin:5px;"><br>

        <label class="lbl" for="input_modalidades"> Modalidades: </label>
        <input type="text" name="input_modalidades" id="input_modalidades" style="margin:5px;"><br>

        <label class="lbl" for="input_recebimento"> Recebimento: </label>
        <input type="text" name="input_recebimento" id="input_recebimento" style="margin:5px;"><br>
        <div class="flex-container">
            <button class="btn">Salvar</button>
    </form>
    <a class="inicio" href="../index.php">Inicio </a>
    </div>
</body>

</html>