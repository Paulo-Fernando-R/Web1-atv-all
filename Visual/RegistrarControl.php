
<!DOCTYPE html>
<html lang="br">

<?php
session_start();
define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Web1 atv all/');
require_once _BASE . '/DAO/Conexao.php';
require_once _BASE . '/Modelo/Usuario.php';
require_once _BASE . '/DAO/DAOUsuario.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body>
    
    <?php

        if(empty($_POST['nome']) || empty($_POST['usuario']) || empty($_POST['senha']))
        {
            
            header('Location: Registrar.php');
            exit();
        }

        $usuario = new Usuario();
        $conexao = new Conexao();
        $daoUsuario = new DAOUsuario();

        $nome = $_POST['nome'];
        $userName = $_POST['usuario'];
        $senha = $_POST['senha'];

        $usuario->setNome($nome);
        $usuario->setUserName($userName);
        $usuario->setSenha($senha);

        $result = $daoUsuario->verificaUsuario($usuario);
        
        if(count($result) == 0)
        {
            $daoUsuario->cadastrar($usuario);
            header('Location: Login.php');
            exit();
        }
        else
        {
            $_SESSION['nao_autenticado'] = true;
            header('Location: Registrar.php');
            
            exit();
        }

    ?>

</body>
</html>