
function FunEdit(){


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
}

function FunCan(){

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
}





// onclick="Enviar1()" isso vai no html no corpo do botão que vai ativar a função

/*function() {
    document.getElementById("btn_forum waves-effect waves-light btn orange darken-2").style.display = "none";
    }*/
