<?php
session_start();
?>
<!DOCTYPE html>
<html lang="br">

<?php

    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Web1 atv all/');
    require_once _BASE . '/DAO/Conexao.php';
    require_once _BASE . '/Modelo/Fornecedor.php';
    require_once _BASE . '/DAO/DAOfORNECEDOR.php';
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
         $id = $_POST['id'];
         $nome = $_POST['nome'];
         $tel = $_POST['valor'];

     
         if(empty($nome) || empty($tel))
         {
             echo "<script> alert('Digite os valores e tente novamente!') </script>";

             $caminho = '../Visual/FormCadastroFornecedor.php?dados='.$id;
             //echo "<script>window.location.href = ${caminho}</script>";
             header("Location: ${caminho}");
             exit();
         }

         $daoForn = new DAOFornecedor();
         $forn = new Fornecedor();
         $daoUsuario = new DAOUsuario();

         $forn->setNome($nome);
         $forn->setTelefone($tel);


         $aux = $_SESSION['usuario'];
         // echo 'session:' . $aux;
          $idUser = $daoUsuario->buscaId($aux);
         // echo 'user:' . $idUser;
         $forn->setIdUsuario($idUser);

         if($daoForn->inclui($forn))
         {
            echo "<script> alert('Adicionado com sucesso') </script>";
        }
        else
        {
            echo "<script> alert('algo deu errado tente novamente!') </script>";
        }
        echo "<script>window.location.href = './ListaFornecedor.php';</script>";

         
    ?>
    
</body>
</html>