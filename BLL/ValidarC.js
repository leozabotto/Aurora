function ValidC(){
            var Nome = document.getElementById("name").value;
            if(Nome == ""){
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo nome vazio!";
                return false;
            }
            var Email = document.getElementById("email").value;
            if(Email == ""){
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo email vazio!";
                return false;
            }
            var User = document.getElementById("user").value;
            if(User == ""){
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo usuário vazio!";
                return false;
            }
            var Senha = document.getElementById("passuser").value;
            if(Senha == ""){
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo senha vazio!";
                return false;
            }
            var ConSenha = document.getElementById("passuserconf").value;
            if(ConSenha == ""){
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo confirmar senha vazio!";
                return false;
            }
            var Sexo = document.getElementById("sexo").value;
            if(Sexo == ""){
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo sexo vazio!";
                return false;
            }
            var DNasc = document.getElementById("nasc").value;
            if(DNasc == ""){
                var Retorno = document.getElementById("Retorno");
                Retorno.innerText = "Campo data de nascimento vazio!";
                return false;
            }
            document.cadastro.submit();
        }
