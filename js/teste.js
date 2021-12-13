

const a = function()
{
    let a = document.getElementById('teste1');
    a.style.backgroundColor = 'blue';
}

function teste(funcao)
{
    
    funcao();
}

const b = (x, y) =>
{
    
    let valor = x*y;
    alert(valor);
}

/////////////////////////////////////////////forma atual///////////////////////////////////////////////////////////////

window.addEventListener('load', function()
{
    let btn1 = document.getElementById('teste');
    btn1.addEventListener('click', function()
    {
        let a = document.getElementById('teste');
        a.style.backgroundColor = 'red';
    });

    let btn2 = document.getElementById('teste1');
    btn2.addEventListener('click', function()
    {
        let a = document.getElementById('teste1');
        a.style.backgroundColor = 'blue';
    });

    let btn3 = document.getElementById('teste2');
    btn3.addEventListener('click', function()
    {
        teste(function()
        {
            alert('escreva');
        })
    });

});

//ou

/*function funcao()
{
    let a = document.getElementById('teste');
    a.style.backgroundColor = 'red';
}

let c = function()
{
    let btn1 = document.getElementById('teste');
    btn1.addEventListener('click', funcao);
}

window.addEventListener('load', c);
*/