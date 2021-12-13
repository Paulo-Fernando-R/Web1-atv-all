<?php
session_start();
?>
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/CadastroConta.css">
</head>

<?php
    define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/Web1 atv all/');
    require_once _BASE . '/DAO/Conexao.php';
    require_once _BASE . '/Modelo/Fornecedor.php';
    require_once _BASE . '/DAO/DAOFornecedor.php';

    $user = $_SESSION['usuario'];
    $daoF = new DAOFornecedor();
    $result = $daoF->listaTodos($user);
?>
<body>
<div class="divisao">

    

</div>

<div class="divisao2"></div>

<div class="quadro">

    <div class="divTitulo">
        <h1 class="titulo">Cadastro de Produtos</h1>
    </div>
    

    <div class="divForm">

    <form action="CadastroProduto.php" method="POST">


        <?php
            if(empty($_REQUEST['dados']))
            {
                $id = -1;
            }
            else
            {
                $id = $_REQUEST['dados'];
            }
             
        ?>
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="campos">
            <label for="nome">Nome</label>
            <input type="text" name="nome", id="nome">
            
        </div>

        <div class="campos">
            <label for="forn">Fornecedor</label>
            <select name="forn" id="forn">
                <option style="color: black;">Selecione</option>
                <?php

                    foreach($result as $row)
                    {?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?>
                    </option> <?php 

                    }

                ?>
                
                
               
            </select>
            
        </div>
        <div class="campos">
            <label for="valor">Valor</label>
            <input id="valor" type="text" name="valor" onkeypress="return onlynumber(event)">
            
        </div>

        

        <div style="display: flex; justify-content: flex-end; " class="campos">
            <button id="btnCancel" type="button" class="btnNormal">Voltar</button>
            <button id="btnSubmit" class="btnNormal">Cadastrar</button>
        </div>
        

    </form>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>

<script>
    window.addEventListener('load', function()
{

    let a = document.getElementById('btnCancel');
    a.addEventListener('click', function()
    {
        window.location.href = 'http://localhost/Web1%20atv%20all/Visual/ListaProduto.php';
    });

    /*let valor = document.getElementById('valor');
    valor.addEventListener('keypress', function(evt)
    {
       
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode( key );
            //var regex = /^[0-9.,]+$/;
            var regex = /^[0-9.]+$/;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
    });*/

    var cleave = new Cleave('#valor', {
    numeral: true,
    numeralThousandsGroupStyle : 'none', 
    numeralDecimalScale : 2,
    numeralDecimalMark : '.' , 
    numeralPositiveOnly : true,
});

});
</script>
</body>
</html>