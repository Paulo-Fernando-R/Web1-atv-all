<!DOCTYPE html>
<html lang="en">

<?php

define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Web1 atv all/');
require_once _BASE . '/DAO/Conexao.php';
require_once _BASE . '/Modelo/Usuario.php';
require_once _BASE . '/DAO/DAOUsuario.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listagem de Usuários</title>
    <link rel="stylesheet" href="/Web1 atv all/CSS/Estilo.css">
</head>
<body>

<div>
        <a href="./Visual/ListaUsuario.php">ListagemUsuario</a>
       

        <a href="./Visual/FormCadastroUsuario.php">CadatroUsuario</a>
    

        <a href="./Visual/FormCadastroConta.php">CadastroConta</a>
        

        <a href="./Visual/ListaConta.php">ListagemConta</a>
      
    </div>


    <table>

        <tr>
            <th >ID</th>
            <TH>NOME</TH>
            <TH>LOGIN</TH>
            <TH>SENHA</TH>
        </tr>

        <?php
            $dv = new DAOUsuario();

            $lista = $dv->listaTodos();
            
            foreach($lista as $linha)
            {
                echo '<tr>';
                foreach($linha as $atributo => $valor)
                {
                    echo '<td>' . $valor . '</td>';
                }
                echo '</tr>';
            }
        ?>

    </table>

</body>
</html>