<?php
session_start();
?>
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="../CSS/CustomRegistro.css">
</head>
<body>

<?php



?>

<div class="fundo">

   <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>

        <div class="info">
            <h3 style="color: white;" class="titulo">Tente colocar um usuário diferente, este ja existe!</h3>
        </div>

        <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>

<div class="quadro">

    <div class="divTitulo">

        <h1 class="titulo"> Fazer o Registro</h1>

    </div>

    <div class="divForm">
        <form action="RegistrarControl.php" method="POST">

        <div class="campos">

            <label for="nome">Nome</label>
            <br>
            <input type="text" name="nome", id="nome">  
                
        </div>

        <div class="campos">

            <label for="usuario">Usuário</label>
            <br>
            <input type="text" name="usuario", id="usuario">  
                
        </div>

        <div class="campos"> 

            <label for="senha">Senha</label>
            <br>
            <input type="password" name="senha", id="senha">

        </div>

        <div style="display: flex; justify-content: flex-end; " class="campos">
            <button class="btnNormal">Cadastrar</button>
            
        </div>

            
            

        </form>
    </div>

</div>

</div>

</body>
</html>