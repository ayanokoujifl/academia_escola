<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./styles/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./styles/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./styles/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./styles/assets/favicon/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="./styles/estilização/NavBar.css">
    <title>Início</title>
</head>

<body>
    <header>
        <nav>
            <h1>Academia Boa Forma</h1>
            <a href="http://github.com/ayanokoujifl" target="_blank">
                <img src="./styles/assets/git.svg" alt='GitHubIcon'>
                <p>Luís Gustavo</p>
                </div>
            </a>
            </div>
        </nav>
    </header>

    <div class="">
        <a href="./visual/listagemCliente.php" class=""><strong>Clientes</strong> </a>
        <br>
        <a href="./visual/listagemFuncionario.php" class=""><strong>Funcionários</strong></a>
        <br>
        <a href="./visual/listagemEquipamento.php" class=""><strong>Equipamentos</strong></a>
        <br />
        <a href="./visual/listagemModalidade.php" class=""><strong>Modalidades</strong></a>
    </div>

    <div class="">
        <a href="./visual/formCadastroCliente.php">
            <h3 class="">Cadastro de Clientes</h3>
        </a>
        <a href="./visual/formCadastroFuncionarios.php">
            <h3 class="">Cadastro de funcionários</h3>
        </a>
        <a href="./visual/formCadastroEquipamento.php">
            <h3 class="">Cadastro de equipamentos</h3>
        </a>
        <a href="./visual/formCadastroModalidade.php">
            <h3 class="">Cadastro de Modalidades</h3>
        </a>
        <img src="./styles/assets/favicon/android-chrome-512x512.png">
    </div>

</body>

</html>
<?php
/*
require_once './modelo/Cliente.php';
require_once './modelo/Funcionario.php';
require_once './modelo/Equipamento.php';
require_once './modelo/Modalidade.php';
require_once './dao/DaoCliente.php';
require_once './dao/Conexao.php';
require_once './dao/DaoFuncionario.php';
require_once './dao/DaoEquipamento.php';
require_once './dao/DaoModalidade.php';

$c1 = new Cliente(
    'Ayanokouji',
    null,
    17,
    'dia 20',
    '2',
    16564423616

);
$c2 = new Cliente(
    'Kouenji',
    null,
    17,
    'dia 27',
    '3',
    16564423616

);
$c3 = new Cliente(
    'Sakayanagi',
    null,
    17,
    'dia 27',
    '1',
    16564423616

);

$dc = new DaoCliente();

if ($dc->incluir($c1)) {
    echo $c1->getNome() . ' foi cadastrado com sucesso!';
} else {
    echo 'Erro no cadastro do cliente: ' . $c1->getNome();
}
echo '<br>';

if ($dc->incluir($c2)) {
    echo $c2->getNome() . ' foi cadastrado com sucesso!';
} else {
    echo 'Erro no cadastro do cliente: ' . $c2->getNome();
}
echo '<br>';

if ($dc->incluir($c3)) {
    echo $c3->getNome() . ' foi cadastrado com sucesso!';
} else {
    echo 'Erro no cadastro do cliente: ' . $c3->getNome();
}

$f = new Funcionario(
 null,"Sung-jin-woo",16564423616,2500,"2004-08-17","Dia 20",1);
echo '<br>';
$df = new DaoFuncionario();
if ($df->incluir($f)) {
    echo $f->getNome() . " cadastrado com sucesso!";
} else {
    echo 'Falha no cadastro';
}
echo '<br>';


$e1 = new Equipamento(null, "Cross", "3", "3 dias");
$de = new DaoEquipamento();
if ($de->incluir($e1)) {
    echo $e1->getNome() . " cadastrado com sucesso!";
} else {
    print "Falha no cadastro!";
}
echo '<br>';
$c2->setId(2);
if($dc->remover($c2)){
    echo $c2->getNome()." foi removido do sistema!";
}else{
    echo 'Falha em remover c3->getNome()';
}




echo "Clientes: <br>";
echo $c1->getNome() . " - " . $c1->getId() . " - " . $c1->getCpf() . " - " . $c1->getModalidades();

echo '<br>';
echo '<br>';

// 'Alterando dados iniciais'
$c1->setNome("Ayanokouji kiyotaka");
$c1->setCpf(19999999999);
$c1->setIdade(16);
$c1->setModalidades('Calistenia <br>');

echo 'Valores alterados de cliente:<br>';
echo $c1->getNome() . " - " . $c1->getId() . " - " . $c1->getCpf() . " - " . $c1->getModalidades();
echo "<br>";
echo "Funcionarios:<br>";
$f1 = new Funcionario(
    01,
    'Sung Jin Woo',
    212345678910,
    5000,
    '17/08/2004',
    'dia 10',
    'boxe'
);

echo $f1->getId() . " - " . $f1->getNome() . " - " . $f1->getCpf() . " - " . $f1->getSalario() . " - " . $f1->getNasc() . "<br>";

echo "<br>";

echo "Equipamentos: <br>";

echo $e1->getId() . " - " . $e1->getNome() . " - " . $e1->getModalidade()
    . " - " . $e1->getTempoRevisao();

echo "<br>";
echo "<br>";

echo "Modalidades: <br>";

echo $m1->getId() . " - " . $m1->getNome() . " - " . $m1->getValor();

echo "<br>";
*/
