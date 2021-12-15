<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/CadastroConta.css">
</head>
<body>
<div class="divisao">

<?php
      
      include("./LoginVerifica.php");
    
?>  

</div>

<div class="divisao2"></div>

<div class="quadro">

    <div class="divTitulo">
        <h1 class="titulo">Cadastro de Fornecedores</h1>
    </div>
    

    <div class="divForm">

    <form action="CadastroFornecedor.php" method="POST">


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
            <label for="valor">Telefone</label>
            <input id="valor" type="text" name="valor">
            
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
        window.location.href = 'http://localhost/Web1%20atv%20all/Visual/ListaFornecedor.php';
    });

    var cleave = new Cleave('#valor', {
    numeral: true,
    numeralThousandsGroupStyle : 'none', 
    numeralDecimalScale : 0,
    numeralDecimalMark : '.' , 
    numeralPositiveOnly : true,

    });
});
</script>
</body>
</html>