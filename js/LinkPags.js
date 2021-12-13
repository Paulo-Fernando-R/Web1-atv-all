window.addEventListener('load', function()
{
    let btnInicio = document.getElementById('inicio');
    btnInicio.addEventListener('click', function()
    {
        window.location.href = 'http://localhost/Web1%20atv%20all/index.php';
    });
    
    let btnPag = document.getElementById('contasPag');
    btnPag.addEventListener('click', function()
    {
        window.location.href = 'http://localhost/Web1%20atv%20all/Visual/ListaConta.php';
    });

    let btnAddForn = document.getElementById('Fornecedores');
    btnAddForn.addEventListener('click', function()
    {
        window.location.href = 'http://localhost/Web1%20atv%20all/Visual/ListaFornecedor.php';
    });

    let btnAddCliente = document.getElementById('Clientes');
    btnAddCliente.addEventListener('click', function()
    {
        window.location.href = 'http://localhost/Web1%20atv%20all/Visual/ListaCliente.php';
    });

    let btnAddProd = document.getElementById('Produtos');
    btnAddProd.addEventListener('click', function()
    {
        window.location.href = 'http://localhost/Web1%20atv%20all/Visual/ListaProduto.php';
    });


});