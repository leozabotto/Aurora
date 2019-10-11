<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--Importando Ícone da Google Font-->
         <link href="css/icon.css" rel="stylesheet">
        <!--Importando materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Importando CSS Personalizado-->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--"Mostrando" ao navegador que a página é optimizada para dispostivos mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/resizing/resize.js"></script>
        <!--Importando arquivo JS para algumas funções -->
        <script src="BLL/AlterarP.js"></script>
        <!--Importando arquivo de alterar Usuário-->
        <script src="BLL/Editar.js"></script>
        <!--Importando arquivo do botão-->
		
    </head>
	
	<body class="grey lighten-3">

		<?php	
            include 'nav_home.php';
		?>
	
		<main>	
            <div class="container">
                <div class="row center-align mt-2">
                    <div class="col s12 m8 offset-m2">
                        <div class="card mt-2">
                            <div class="card-content">
                                <div class="card-title">
                                    <div class="row center-align">
                                        <h4> Meu Perfil </h4>  
                                    </div>
                                </div>

                            <form name="Alt" method = "POST" action = "DAL/Perfil/Class_alterarU_DAL.php" enctype="multipart/form-data">
                                <div class="row center-align">
                                    <div class="col s12 m12"> <!-- IMAGEM DO USUÁRIO - pode ser editada se o usuário clicar sobre a imagem (link) e deverá ser cortada para 512x512 px-->
                                        <div class="col s6 offset-s3"><a href="#"><label for="Uimg"><img class="hoverable responsive-img user-img preview-img" id="img_perfil" src="<?php if(!empty($_SESSION['UserImg'])){echo "uploads/img_Uperf/".$_SESSION['UserImg'];}else if(!empty($_SESSION['ImgRed'])){echo $_SESSION['ImgRed'];}else{echo "img/usericon.png";}?>"></label><input class="file-chooser" type="file" id="Uimg" name="Uimg" accept="image/png, image/jpeg" hidden disabled></a></div> <br>
                                        <!-- <a href="#" class="hide-on-large-only	btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"></i> Alterar Imagem </a></li> Foto de Perfil do usuário-->
                                    </div>
                                            <div class="col s12 m12 mt-2">
                                                <div class="input-field col s12 m8 offset-m2">
                                                    <input id="name" type="text" name="nome" class="validate" input name="texto" type="text" maxlength="100" value ="<?php echo $_SESSION['Nome_Completo']; ?>" disabled><!--Campo Nome do Usuário-->
                                                    <label for="name"> Nome </label>
                                                    <span class="helper-text" data-error="Insira seu nome" data-success=""></span>
                                                </div>
                                            </div>
                                            <div class="col s12 m12">
                                                <div class="input-field col s12 m8 offset-m2">
                                                    <input id="user" type="text" name="usernick" value="<?php echo $_SESSION['User_Name']; ?>" class="validate" disabled>
                                                    <label for="user"> Nome de Usuário </label> <!--Campo Usuário-->
                                                    <span class="helper-text" data-error="Insira um nome de usuário válido" data-success=""></span>
                                                </div>
                                            </div>
                                            <div class="col s12 m12">
                                                <div class="input-field col s12 m8 offset-m2">
                                                    <input type="text" id="nasc" name="data_nascimento" class="datepicker" value="<?php echo $_SESSION['Nasc'];?>" disabled> <!--Campo Data de Nascimento-->
                                                    <label for="nasc"> Nascimento </label>
                                                </div>
                                            </div>
                                            <div class="col s12 m12">
                                                <div class="input-field col s12 m8 offset-m2">
                                                    <select id="sexoi" name="sexo" disabled>
                                                        <optgroup label="Selecione:">
                                                        <?php
                                                            if($_SESSION['Sexo']=="Masculino")
                                                            {            
                                                                echo '<option value="Masculino" selected>Masculino</option>
                                                                <option value="Feminino">Feminino</option>
                                                                <option value="outro">Prefiro não identificar</option>';
                                                            }
                                                            else if($_SESSION['Sexo']=="Feminino")
                                                            {            
                                                                echo '<option value="Masculino">Masculino</option>
                                                                <option value="Feminino" selected>Feminino</option>
                                                                <option value="Outro">Prefiro não identificar</option>';
                                                            }
                                                            else
                                                            {            
                                                                echo '<option value="Masculino">Masculino</option>
                                                                <option value="Feminino">Feminino</option>
                                                                <option value="Outro" selected>Prefiro não identificar</option>';
                                                            }
                                                        ?>
                                                        </optgroup>     
                                                    </select>  
                                                    <label>Sexo</label>                            
                                                </div>
                                            </div>   
                                            <div class="col s12 m12">
                                                <div class="input-field col s12 m8 offset-m2">
                                                    <input id="passuser" type="password" name="senha" class="validate" required value="<?php echo $_SESSION['Senha']; ?>" disabled>
                                                    <label for="passuser"> Senha </label> <!--Campo Senha-->
                                                </div>
                                                <input id="email" type="text" name="email" class="hide" input name="texto" type="text" maxlength="100" value ="<?php echo $_SESSION['Email']; ?>" disabled>
                                                <input id="emailant" type="hidden" name="emailant">
                                            </div>
                                            <div class="col s12 m12">
                                                <div class="input-field col s12 m8 offset-m2">
                                                    <input id="tipo" type="text" name="tipo" value="<?php echo $_SESSION['Categoria']; ?>" class="validate" disabled>
                                                    <label for="user"> Tipo </label> 
                                                </div>
                                            </div>
                                            <div class="col s12 m12">
                                            <?php
                                                if ($_SESSION['Categoria'] == "Tutor")
                                                {
                                                    echo '<span> Você é um Tutor. Obrigado por participar da equipe!';
                                                }
                                                else{
                                                    echo '<span> Atualmente você é um Aluno. <a href="#modal1" class="modal-trigger"> Clique aqui </a> caso queira ser um Tutor.';
                                                }
                                            ?>
                                            </div>
                                           
                                        </div> 
                                    </form> 
                                    <div class="row center-align">
                                        <div class="col s12 m12">

                                            <button id="btnEditar" class="waves-effect waves-light btn orange darken-2" onclick="FunEdit()"> <i class="white-text material-icons"> create </i> Editar </li> &nbsp;

                                            <!--Os botões abaixo só aparecem se o usuário clicar no botão "Editar"

                                            *Quando o usuário clicar em editar, o botão "Editar" some;
                                            *Os botões abaixo aparecem

                                            -->

                                            <button id="btnSalvar" class="waves-effect waves-light btn orange darken-2 hide" disabled onclick ="FunAlt()"> <i class="white-text material-icons" >  save </i> Salvar </li> </button>

                                            <button id="btnCancelar" class="waves-effect waves-light btn orange darken-2 hide"  disabled onclick ="FunCan()"> <i class="white-text material-icons"> </i> Cancelar </li> </button>
                                        
                                        </div>
                                    </div>
                                    <div class="row center-align">
                                        <div class="col s12">
                                            <?php
                                                if (isset($_SESSION['auxiliar']))
                                                {
                                                    if ($_SESSION['auxiliar']=="Sucesso ao alterar seus dados")
                                                        {
                                                            echo "<h6 class='green-text' id='Retorno'>";
                                                                echo $_SESSION['auxiliar'];
                                                                unset ($_SESSION['auxiliar']);							
                                                            echo "</h6>";
                                                        }
                                                    else
                                                        {
                                                            echo "<h6 class='red-text' id='Retorno'>";
                                                                echo $_SESSION['auxiliar'];
                                                                unset ($_SESSION['auxiliar']);							
                                                            echo "</h6>";
                                                        }
                                                }
                                            ?>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>         
                </div>      
            </div> 

            <div id="modal1" class="modal">                     
                <div class="modal-content">
                    <div class="row center-align">
                        <div class="row">
                            <img class="responsive-img col s2 offset-s5" src="img/AuroraLogo.png"/>
                        </div>
                        <h4> Afinal, o que é ser um Tutor no Aurora? </h4>
                        <p> Um Tutor é responsável por gerenciar a plataforma. Ele tem acesso à página de gerenciamento, onde é possível adicionar questões e conteúdo no banco de dados. Isso não é demais? </p>
                        <p> Além disso, o Tutor zela pela integração dos usuários no Fórum Aurora, podendo marcar as respostas como válidas e editá-las caso haja algo que não deveria estar ali. </p>
                        <p> Gostaria de fazer parte da Equipe? </p>
                    </div>
                    <div class="row center-align">
                        <form action="#" method="#">
                            <div class="col s12 m12">
                                <button id="#" class="waves-effect waves-light btn orange darken-2"  onclick =""> Eu quero! </button> &nbsp;
                                <button id="#" class="waves-effect waves-light btn orange darken-2"  onclick =""> Talvez depois. </button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>               
            
        </main>
        <script>
            const $ = document.querySelector.bind(document);
            const previewImg = $('.preview-img');
            const fileChooser = $('.file-chooser');

            fileChooser.onchange = e => {
                const fileToUpload = e.target.files.item(0);
                const reader = new FileReader();

                // evento disparado quando o reader terminar de ler 
                reader.onload = e => previewImg.src = e.target.result;

                // solicita ao reader que leia o arquivo 
                // transformando-o para DataURL. 
                // Isso disparará o evento reader.onload.
                reader.readAsDataURL(fileToUpload);
            };
        </script> 
	
		 
        <script>
           M.toast({html: '<span><i class="small material-icons">error_outline</i> &nbsp; Lembre-se que algumas informações não são editáveis. Caso precise, entre em contato com a equipe.</span>'}) 
           M.AutoInit();  
        </script>

        <script src="BLL/Editar.js"></script>	

        <script>
            /*$.ajax({
                // A propriedade `url` é local, arquivo, script, alvo de sua requisição.
                url: "DAL/Perfil/Class_inserirUfoto.php",

                // A propriedade `type` é o verbo HTTP (GET, POST, HEAD, etc...)
                type: "POST",

                // A propriedade `data` são os dados de sua aplicação.
                data: "Redimensionar()",

                // A propriedade `dataType` refere-se ao tipo de dado que o servidor deve retornar a requisição.
                dataType: "html"
            });

            // O método `done()` recebe uma função de callback
            // que será executada caso a requisição tenha sucesso.
            request.done(function(resposta) {
                console.log(resposta)
            });

            // O método `fail()`recebe uma função de callback
            // que será executada caso a requisição falhe.
            request.fail(function(jqXHR, textStatus) {
                console.log("Request failed: " + textStatus);
            });

            // O método `always()` recebe uma função de callback
            // que será executada quando a requisição de sucesso estiver completa.
            request.always(function() {
            console.log("completou");
            });*/
        </script>    
        
	</body>
</html>




