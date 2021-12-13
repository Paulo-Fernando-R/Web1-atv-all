<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h1>Cadastro de Usuários</h1>

    <form action="CadastroUsuario.php" method="POST">

        <!--    campos     -->
        <label for="nome">Nome</label>
        <input type="text" name="nome", id="nome">
        <br>

        <label for="login">Login</label>
        <input type="text" name="login", id="login">
        <br>

        <label for="senha">Senha</label>
        <input type="password" name="senha", id="senha">
        <br>

    <!--    combobox     
        <label for="teste">EsatdoCB</label>
        <select name="teste" id="teste">
            <option value="mg">Minas</option>
            <option value="rj">Rio</option>
            <option value="sp">Sampa</option>
        </select>

        <br>

           texto grande     
        <label for="coment">Comentário</label>
        <br>
        <textarea name="coment" id="coment" cols="30" rows="10">Comentário</textarea>
    -->

    <button>Cadastrar</button>

    
    </form>
</body>
</html>