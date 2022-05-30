<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/academia/styles/estilização/Tables.css">
    <link rel="stylesheet" type="text/css" href="/academia/styles/estilização/BodyAll.css">
    <link rel="stylesheet" href="../styles/estilização/NavBar.css">
    <title>Clientes</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/academia/styles/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/academia/styles/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/academia/styles/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/academia/styles/assets/favicon/site.webmanifest">
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
        Listagem de Clientes:
    </h1>

    <div>
        <a href="\academia\index.php" class="inicio">
            Início
        </a>

    </div>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Nome
            </th>
            <th>
                Idade
            </th>
            <th>
                CPF
            </th>
            <th>
                Modalidades
            </th>
            <th>
                Mensalidades
            </th>
        </tr>
        <?php
        require_once '../dao/DaoCliente.php';
        require_once '../dao/Conexao.php';

        $dc = new DaoCliente();
        $lista = $dc->listar();

        foreach ($lista as $linha) {
            echo '<tr>';
            echo '<td>' . $linha['ID'] . '</td>';
            echo '<td>' . $linha['NOME'] . '</td>';
            echo '<td>' . $linha['IDADE'] . '</td>';
            echo '<td>' . $linha['CPF'] . '</td>';
            echo '<td>' . $linha['MODALIDADES'] . '</td>';
            echo '<td>' . $linha['MENSALIDADES'] . '</td>';
        }
        ?>
    </table>
</body>

</html>