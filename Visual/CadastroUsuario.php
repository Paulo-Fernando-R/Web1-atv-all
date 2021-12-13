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
    <title>CadastroUsuario</title>
</head>
<body>
    <h1>Cadastro de Usuarios</h1>

    <?php
     
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $user = new Usuario();
        $daoUser = new DAOUsuario();
        $user->setNome($nome);
        $user->setSenha($senha);
        $user->setUserName($login);
        // $user->setId(2);
        if($daoUser->inclui($user))
        {
            echo 'usuario cadastrado';
        }
        else
        {
            echo 'erro';
        }

    ?>

<br>
<a href="./ListaUsuario.php">ListagemUsuario</a>
<br>
<a href="./FormCadastroUsuario.php">CadatroUsuario</a>

</body>
</html>