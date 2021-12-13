<?php
session_start();
?>
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/CustomLogin.css">
</head>

<body>

    <div class="fundo">

        <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>

        <div class="info">
            <h3 style="color: white;" class="titulo">Dados incorretos, tente novamente!</h3>
        </div>

        <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>

        <div class="quadro">

            <div class="divTitulo">

                <h1 class="titulo"> Fazer Login</h1>

            </div>

            <div class="divForm">
                <form action="LoginControl.php" method="POST">


                <div class="campos">

                    <label for="usuario">Usuário</label>
                    <br>
                    <input type="text" name="usuario", id="usuario">  
                        
                </div>

                <div class="campos"> 

                    <label for="senha">Senha</label>
                    <br>
                    <input type="text"  name="senha", id="senha">

                </div>

                <div style="display: flex; justify-content: flex-end; " class="campos">
                    <button type="button" class="btnNormal" onclick="window.location.href='./Registrar.php'">Cadastrar</button>
                    <button class="btnNormal">Entrar</button>
                </div>

                    
                    

                </form>
            </div>

        </div>

    </div>

</body>
</html>