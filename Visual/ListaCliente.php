<?php
      
      include("./LoginVerifica.php");
    
?>
<!DOCTYPE html>
<html lang="br">

<?php

define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Web1 atv all/');
require_once _BASE . '/DAO/Conexao.php';
require_once _BASE . '/Modelo/Cliente.php';
require_once _BASE . '/DAO/DAOCliente.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        <h1 class="titulo">Aqui estão seus clientes cadastrados</h1>

    </div>

    <div class="fundoFaixaTable">
       
        <div class="corFaixaTable">

            <div class="arredondadoFaixaTable">

            </div>

        </div>

        <div class="divBotoesFaixaTable">

        <form style="justify-content: flex-start; width: 80vh;" class="divBotoesFaixaTable" action="ManipulaConta.php" method="POST">

            <button style="width: 80vh; height: 30pt;"   type="button" id="adicionarForn" class="btnNormal">Adicionar novo</button>
        
        </form>

        </div>
        
    </div>

    <div class="divTable"> 

        <table id="minhaTabela">

        <tr>
            <TH>ID</TH>
            <TH>NOME</TH>
            <TH>Telefone</TH>
        </tr>

        <?php

            $user = $_SESSION['usuario'];
            $daoCliente = new DAOCliente();
            $lista = $daoCliente->listaTodos($user);
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
            let btnInicio = document.getElementById('adicionarForn');
            btnInicio.addEventListener('click', function()
            {
                window.location.href = './FormCadastroCliente.php';
            });
        });
    </script>

    <script src="../js/LinkPags.js"></script>
    
    
</body>
</html>