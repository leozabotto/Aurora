function ValidL(){
            //Pegando valores dos componentes
            var Email = document.getElementById("user").value;
            var Senha = document.getElementById("passuser").value;

            //Testa se e-mail ta vazio
            if(Email == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo Email vazio!";
                return false;
            }
            //Testa se senha ta vazio
            else if(Senha == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo senha vazio!";
                return false;
            }
            //Submita se tudo certo
            else
            {
                document.Login.submit();
            }
        }
