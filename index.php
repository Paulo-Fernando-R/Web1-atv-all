<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="./CSS/Custom.css">
    
</head>
<body>
  
    <div id="cabecalho">

        <img id="icone" src="./Resources/baseline_paid_white_48dp.png" alt="">
         <h3 style="padding-left: 20pt ;padding-right: 30pt; font-family: cursive;" class="legenda">Contas</h3>
        
        <button id="inicio" class="botoesCabecalho">Início</button>

      <!--  <button class="botoesCabecalho" onclick="window.location.href='./Visual/ListaUsuario.php'">ListagemUsuario</button>

        <button class="botoesCabecalho" onclick="window.location.href='./Visual/FormCadastroUsuario.php'">CadatroUsuario</button> -->

       
      
        <button id="contasPag" class="botoesCabecalho">Contas</button>
        <button id="Fornecedores" class="botoesCabecalho">Fornecedores</button>
        <button id="Clientes" class="botoesCabecalho">Clientes</button>
        <button id="Produtos" class="botoesCabecalho">Produtos</button>
        
        <!--
        <button id="teste" class="botoesCabecalho">TesteJS</button>
        <button id="teste1" class="botoesCabecalho">TesteJS2</button>
        <button id="teste2" class="botoesCabecalho" >TesteJS3</button>
        -->
    </div>

    <div id="divTitulo">
        
    </div>
    
    <div id="fundo">

        <h1 class="titulo">Suas contas em um só lugar</h1>
        
    </div>

    <div id="servicos">
        <h3 class="subtitulo">Funcionalidades</h3>
    </div>

    <div class="cardsbox" >
        <div class="card">
           <h2 class="legenda">Alguma coisa</h2>
        </div>

        <div class="card">
            <h2 class="legenda">Alguma coisa</h2>
        </div>
    </div>

   
    <div class="cardsbox" >
        <div class="card">
            <h2 class="legenda">Alguma coisa</h2>
        </div>
    
        <div class="card">
            <h2 class="legenda">Alguma coisa</h2>
        </div>
    </div>

    
    <div id="fundoFalas">
        
        <div style="width: 30%;">
             <h1 style="padding-top: 50pt; text-align: center;" class="tituloFalas">Você ainda usa papel para organizar seus gastos?</h1>
             <h1 style="text-align: center; padding-right: 5pt; padding-top: 70%;" class="tituloFalas">Venha se tornar digital conosco</h1>
            
        </div>
       
        
        
    </div>

    <?php
      
      include("./Visual/LoginVerifica.php");
    
    ?>
    

    <div class="rodape">

        <div style="display: flex; justify-content: start; align-items: center;" class="rodape">

            <img style="width: 12vh; height: 12vh; padding-left: 5vh;" src="./Resources/baseline_account_circle_white_48dp.png" alt="">
            
            <div style="">
                <h1 style="padding-left: 3vh;" class="textoRodape"> <?php echo $_SESSION['usuario'];?></h1>
                <H1 style="padding-left: 3vh;" class="textoRodape"> <a class="textoRodape" style="font-size: 2vh;" href="./Visual/Logout.php">Sair</a></H1>
            </div>
            
           
          
            
        </div>

        <div style="width: 40%; display: flex; justify-content: start; align-items: center;">

            <p class="textoRodape" style="font-size: 2vh; padding-right: 5vh;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
  
        </div>
        
     </div>
    
    

  
  
    
    <script src="./js/LinkPags.js"></script>
</body>
</html>