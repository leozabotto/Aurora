function FunEdit(){

    document.getElementById('btnSalvar').disabled = 0;
    document.getElementById('btnCancelar').disabled = 0;
    document.getElementById('btnEditar').disabled = 1;

    document.getElementById('name').disabled = 0;
    document.getElementById('email').disabled = 0;
    document.getElementById('passuser').disabled = 0;

    //alert("fala cuzão");
}

function FunCan(){

    document.getElementById('btnSalvar').disabled = 1;
    document.getElementById('btnCancelar').disabled = 1;
    document.getElementById('btnEditar').disabled = 0;

    document.getElementById('name').disabled = 1;
    document.getElementById('email').disabled = 1;
    document.getElementById('passuser').disabled = 1;
}



// onclick="Enviar1()" isso vai no html no corpo do botão que vai ativar a função

/*function() {
    document.getElementById("btn_forum waves-effect waves-light btn orange darken-2").style.display = "none";
    }*/
