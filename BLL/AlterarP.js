//validação do login
function FunAlt()
{//1
    //Pegando valores dos componentes
    var Nome = document.getElementById("name").value;
    var Email = document.getElementById("email").value;
    var Senha = document.getElementById("passuser").value;

    //Testa se nome ta vazio
    if(Nome == "")
    {//2
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo Nome vazio!";
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
        document.Alt.submit();
    }//4
}//1
