<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php

define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Web1 atv all/');
require_once _BASE . '/DAO/Conexao.php';
require_once _BASE . '/Modelo/Conta.php';
require_once _BASE . '/DAO/DAOConta.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListaConta</title>
    <link rel="stylesheet" href="../CSS/CustomContas.css">
</head>

<body>

    <div id="cabecalho">

        <img id="icone" src="../Resources/baseline_paid_white_48dp.png" alt="">
        <h3 style="padding-left: 20pt ;padding-right: 30pt; font-family: cursive; color: white;" class="legenda">Contas</h3>

        <button id="inicio" class="botoesCabecalho">Início</button>

<!--  <button class="botoesCabecalho" onclick="window.location.href='./Visual/ListaUsuario.php'">ListagemUsuario</button>

  <button class="botoesCabecalho" onclick="window.location.href='./Visual/FormCadastroUsuario.php'">CadatroUsuario</button>

  <button class="botoesCabecalho" onclick="window.location.href='./Visual/FormCadastroConta.php'">CadastroConta</button> -->

  <button id="contasPag" class="botoesCabecalho">Contas</button>
  <button id="Fornecedores" class="botoesCabecalho">Fornecedores</button>
  <button id="Clientes" class="botoesCabecalho">Clientes</button>
  <button id="Produtos" class="botoesCabecalho">Produtos</button>
  <!--
  <button id="teste" class="botoesCabecalho">TesteJS</button>
  <button id="teste1" class="botoesCabecalho">TesteJS2</button>
  <button id="teste2" class="botoesCabecalho" >TesteJS3</button>
  -->
    </div>

    <div class="divTitulo">

        <h1 class="titulo">Aqui estão suas contas cadastradas</h1>

    </div>

    <div class="fundoFaixaTable">
       
        <div class="corFaixaTable">

            <div class="arredondadoFaixaTable">

            </div>

        </div>

        <div class="divBotoesFaixaTable">

        <form class="divBotoesFaixaTable" action="ManipulaConta.php" method="POST">

            <input id="valor" name="valor" type="hidden">
            <button id="visualizarDados" name="visualizarDados" class="btnNormal">Excluir</button>
            <button type="button" id="visualizarDados" name="visualizarDados" class="btnNormal" onclick="teste()">Editar</button>
            <button type="button" id="adicionarConta" class="btnNormal">Adicionar nova</button>
        
        </form>

        </div>
        
    </div>

    <div class="divTable"> 

        <table id="minhaTabela">

        <tr>
            <TH>ID</TH>
            <TH>NOME</TH>
            <TH>Valor</TH>
            <TH>VENCIMENTO</TH>
        </tr>

        <?php

            $user = $_SESSION['usuario'];
            $daoConta = new DAOConta();
            $lista = $daoConta->listaTodos($user);
            $aux = 0;
            

            foreach($lista as $linha)
            {
                echo'<tr>';
                foreach($linha as $atributo=>$valor)
                {
                    if($aux <> 1)
                    {
                        echo '<td>' . $valor . '</td>';
                    }
                    $aux++;
                }
                echo '</tr>';
                $aux = 0;
            }
        ?>
        </table>

    </div>

    <script>
    window.addEventListener('load', function()
    {
        let btnInicio = document.getElementById('adicionarConta');
        btnInicio.addEventListener('click', function()
        {
            window.location.href = '../Visual/FormCadastroConta.php';
        });
    });
    </script>

    <script src="../js/Tabela.js"></script>
    <script src="../js/LinkPags.js"></script>
</body>
</html>