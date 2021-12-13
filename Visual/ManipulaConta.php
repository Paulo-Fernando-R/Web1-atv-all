<!DOCTYPE html>
<html lang="br">

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
    <title>Document</title>
</head>
<body>

    <?php
        $id = $_POST['valor'];


        $conta = new Conta();
        $daoConta = new DAOConta();
        $conta->setId($id);
        if($daoConta->excluir($conta))
        {
            echo "<script> alert('Excluida com sucesso') </script>";
        }
        else
        {
            echo "<script> alert('algo deu errado tente novamente!') </script>";
        }
        echo "<script>window.location.href = 'http://localhost/Web1%20atv%20all/Visual/ListaConta.php';</script>";
    
    ?>

    

    
</body>
</html>