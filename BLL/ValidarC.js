//validação do cadastro
function ValidC()
{//1
    var Nome = document.getElementById("name").value;
    if(Nome == "")
    {//2
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo nome vazio!";
        return false;
    }//2
    var Email = document.getElementById("email").value;
    if(Email == "")
    {//3
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo email vazio!";
        return false;
    }//3
    var User = document.getElementById("user").value;
    if(User == "")
    {//4
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo usuário vazio!";
        return false;
    }//4
    var Sexo = document.getElementById("sexo").value;
    if(Sexo == "")
    {//5
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo sexo vazio!";
        return false;
    }//5
    var DNasc = document.getElementById("nasc").value;
    if(DNasc == "")
    {//6
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo data de nascimento vazio!";
        return false;
    }//6
    var Senha = document.getElementById("passuser").value;
    if(Senha == "")
    {//7
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo senha vazio!";
        return false;
    }//7
    var ConSenha = document.getElementById("passuserconf").value;
    if(ConSenha == "")
    {//8
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "Campo confirmar senha vazio!";
        return false;
    }//8
    else if (ConSenha != Senha)
    {//9
        var Retorno = document.getElementById("Retorno");
        Retorno.innerText = "As senhas não conferem!";
        return false;
    }//9
    document.cadastro.submit();
}//1
