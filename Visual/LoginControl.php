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
    <title>Document</title>

</head>
<body>

    <?php

        if(empty($_POST['usuario']) || empty($_POST['senha']))
        {
            header('Location: Login.php');
        }

        $usuario = new Usuario();
        $conexao = new Conexao();
        $daoUsuario = new DAOUsuario();

        $userName = $_POST['usuario'];
        $senha = $_POST['senha'];

        $usuario->setUserName($userName);
        $usuario->setSenha($senha);

        $result = $daoUsuario->login($usuario);

        if(count($result) > 0)
        {
            $local = _BASE . '/index.php';
            $_SESSION['usuario'] = $usuario->getUserName();
            header('Location: http://localhost/Web1%20atv%20all//index.php');
            exit();
        }
        else
        {
            $_SESSION['nao_autenticado'] = true;
            header('Location: Login.php');
            
            exit();
        }


    ?>
    
</body>
</html>