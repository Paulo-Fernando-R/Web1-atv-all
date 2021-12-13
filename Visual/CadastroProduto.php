<?php
session_start();
?>
<!DOCTYPE html>
<html lang="br">

<?php

    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Web1 atv all/');
    require_once _BASE . '/DAO/Conexao.php';
    require_once _BASE . '/Modelo/Produto.php';
    require_once _BASE . '/DAO/DAOProduto.php';
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
      $forn = $_POST['forn'];
      $val = $_POST['valor'];

    echo $forn;
  
      if(empty($nome) || empty($val) || $forn == 'Selecione')
      {
          echo 'entrou';
          echo "<script> alert('Digite os valores e tente novamente!') </script>";

          $caminho = '../Visual/FormCadastroProduto.php?dados='.$id;
          //echo "<script>window.location.href = ${caminho}</script>";
          header("Location: ${caminho}");
          exit();
      }

      $daoProd = new DAOProduto();
      $prod = new Produto();
      $daoUsuario = new DAOUsuario();

      $prod->setNome($nome);
      $prod->setValor($val);
      $prod->setIdFornecedor($forn);


      $aux = $_SESSION['usuario'];
      // echo 'session:' . $aux;
       $idUser = $daoUsuario->buscaId($aux);
      // echo 'user:' . $idUser;
      $prod->setIdUsuario($idUser);

      if($daoProd->inclui($prod))
      {
         echo "<script> alert('Adicionado com sucesso') </script>";
     }
     else
     {
         echo "<script> alert('algo deu errado tente novamente!') </script>";
     }
     echo "<script>window.location.href = './ListaProduto.php';</script>";

      
 ?>
 
?>
    
</body>
</html>