//validação do login
function ValidL()
{//1
    //Pegando valores dos componentes
    var Email = document.getElementById("user").value;
    var Senha = document.getElementById("passuser").value;

    //Testa se e-mail ta vazio
    if(Email == "")
    {//2
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo Email vazio!";
        return false;
    }//2
    //Testa se senha ta vazio
    else if(Senha == "")
    {//3
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo senha vazio!";
        return false;
    }//3
    //Submita se tudo certo
    else
    {//4
        document.Login.submit();
    }//4
}//1
