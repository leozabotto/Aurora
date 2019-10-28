
function FunEdit()
{//1
    M.toast({html: '<span><i class="small material-icons">error_outline</i> &nbsp; Clique na imagem para alterá-la! Ela será ajustada automaticamente. </span>'}) 

    document.getElementById('btnSalvar').disabled = 0;
    document.getElementById('btnCancelar').disabled = 0;
    var btneditar = document.getElementById('btnEditar');
    btneditar.classList.add("hide");
    var btnsalvar = document.getElementById('btnSalvar');
    btnsalvar.classList.remove("hide");
    var btncancel = document.getElementById('btnCancelar');
    btncancel.classList.remove("hide");
    document.getElementById('emailant').value = document.getElementById('email').value;

    document.getElementById('name').disabled = 0;
    document.getElementById('Uimg').disabled = 0;
    document.getElementById('email').disabled = 0;
    document.getElementById('passuser').disabled = 0;
    document.getElementById('nasc').disabled = 0;
    document.getElementsByName('sexo').disabled = 0;
}//1

function FunCan()
{//2

    document.getElementById('btnSalvar').disabled = 1;
    document.getElementById('btnCancelar').disabled = 1;
    document.getElementById('btnEditar').disabled = 0;

    var btneditar = document.getElementById('btnEditar');
    btneditar.classList.remove("hide");
    var btnsalvar = document.getElementById('btnSalvar');
    btnsalvar.classList.add("hide");
    var btncancel = document.getElementById('btnCancelar');
    btncancel.classList.add("hide");

    document.getElementById('name').disabled = 1;
    document.getElementById('Uimg').disabled = 1;
    document.getElementById('email').disabled = 1;
    document.getElementById('passuser').disabled = 1;
    document.getElementById('nasc').disabled = 1;
    document.getElementById('sexoi').disabled = 1;
}//2