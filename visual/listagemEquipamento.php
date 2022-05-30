<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipamentos</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../styles/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../styles/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../styles/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="../styles/assets/favicon/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="/academia/styles/estilização/Tables.css">
    <link rel="stylesheet" type="text/css" href="/academia/styles/estilização/BodyAll.css">
    <link rel="stylesheet" href="../styles/estilização/NavBar.css">

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
        Listagem de Equipamentos:
    </h1>
    <a href="../index.php"class="inicio">
        Inicio
    </a>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Nome
            </th>
            <th>
                Modalidade
            </th>
            <th>
                Tempo de Revisão
            </th>
        </tr>
        <?php
        require_once '../dao/DaoEquipamento.php';
        require_once '../dao/Conexao.php';

        $dc = new DaoEquipamento();
        $lista = $dc->listar();

        foreach ($lista as $linha) {
            echo '<tr>';
            echo '<td>' . $linha['ID'] . '</td>';
            echo '<td>' . $linha['NOME'] . '</td>';
            echo '<td>' . $linha['MODALIDADES'] . '</td>';
            echo '<td>' . $linha['PERIODO_REVISAO'] . '</td>';
        }
        ?>
    </table>
</body>
</head>

</html>