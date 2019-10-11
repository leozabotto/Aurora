//validação do login
function FunAlt(){
            //Pegando valores dos componentes
            var Nome = document.getElementById("name").value;
            var Email = document.getElementById("email").value;
            var Senha = document.getElementById("passuser").value;

            //Testa se nome ta vazio
            if(Nome == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo Nome vazio!";
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
                document.Alt.submit();
            }
        }
