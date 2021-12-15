<?php
      
      include("./LoginVerifica.php");
    
?>
<!DOCTYPE html>
<html lang="br">



<?php

    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Web1 atv all/');
    require_once _BASE . '/DAO/Conexao.php';
    require_once _BASE . '/Modelo/Conta.php';
    require_once _BASE . '/DAO/DAOConta.php';
    require_once _BASE . '/DAO/DAOUsuario.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadastroContas</title>
</head>
<body>

<?php

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $vencimento = $_POST['vencimento'];

    if(empty($nome) || empty($valor) || empty($vencimento))
    {
        echo "<script> alert('Digite os valores e tente novamente!') </script>";
        $caminho = "http://localhost/Web1%20atv%20all/Visual/FormCadastroConta.php?dados=".$id;
        //echo "<script>window.location.href = ${caminho}</script>";
        header("Location: ${caminho}");
        exit();
    }

    
    $conta = new Conta();
    $daoConta = new DAOConta();
    $daoUsuario = new DAOUsuario();

    $aux = $_SESSION['usuario'];
   // echo 'session:' . $aux;
    $idUser = $daoUsuario->buscaId($aux);
   // echo 'user:' . $idUser;
    //return;


    $conta->setId($id);
    $conta->setIdUsuario($idUser);
    $conta->setNome($nome);
    $conta->setValor($valor);
    $conta->setVencimento($vencimento);

    if($id == -1)
    {
        if($daoConta->inclui($conta))
        {
            echo "<script> alert('Adicionada com sucesso') </script>";
        }
        else
        {
            echo "<script> alert('algo deu errado tente novamente!') </script>";
        }
        echo "<script>window.location.href = 'http://localhost/Web1%20atv%20all/Visual/FormCadastroConta.php';</script>";
    }
    else
    {

        if($daoConta->atualizar($conta))
        {
            echo "<script> alert('Alterada com sucesso') </script>";
        }
        else
        {
            echo "<script> alert('algo deu errado tente novamente!') </script>";
        }
        echo "<script>window.location.href = 'http://localhost/Web1%20atv%20all/Visual/ListaConta.php';</script>";

    }




?>

</body>
</html>