//validação do login
function FunQues(){
            //Pegando valores dos componentes
            var IdQ = document.getElementById("id_disciplina2").value;
            var ContQ = document.getElementById("conteudo2").value;
            var DifQ = document.getElementById("difq").value;
            var RespQ = document.getElementById("respq").value;
            var AltA = document.getElementById("alt-a").value;
            var AltB = document.getElementById("alt-b").value;
            var AltC = document.getElementById("alt-c").value;
            var AltD = document.getElementById("alt-d").value;
            var AltE = document.getElementById("alt-e").value;
            var EnunQ = document.getElementById("enunq").value;
            var ResolQ = document.getElementById("resolq").value;

            //Testa se nome ta vazio
            if(IdQ == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo ID vazio!";
                return false;
            }
           
            //Testa se senha ta vazio
            else if(ContQ == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo conteúdo vazio!";
                return false;
            }
            //Testa se senha ta vazio
            else if(DifQ == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo dificuldade vazio!";
                return false;
            }
            //Testa se senha ta vazio
            else if(RespQ == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo resposta vazio!";
                return false;
            }
            //Testa se senha ta vazio
            else if(AltA == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo alternativa A vazio!";
                return false;
            }
            //Testa se senha ta vazio
            else if(AltB == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo alternativa B vazio!";
                return false;
            }
            //Testa se senha ta vazio
            else if(AltC == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo alternativa C vazio!";
                return false;
            }
            //Testa se senha ta vazio
            else if(AltD == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo alternativa D vazio!";
                return false;
            }            
            //Testa se senha ta vazio
            else if(EnunQ == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo enunciado vazio!";
                return false;
            }
            //Testa se senha ta vazio
            else if(ResolQ == "")
            {
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo resolução vazio!";
                return false;
            }
            //Submita se tudo certo
            else
            {
                document.cad_quest.submit();
            }
        }
