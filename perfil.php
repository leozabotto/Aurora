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
                    <div class="col s12">
                        <h5> Meu Perfil </h5>
                    </div>
                </div>
                
                <form name="Alt" method = "POST" action = "DAL/Perfil/Class_alterarU_DAL.php">
                    <div class="row center-align">
                        <div class="col s12 m7"> <!-- IMAGEM DO USUÁRIO - pode ser editada se o usuário clicar sobre a imagem (link) e deverá ser cortada para 512x512 px-->
                            <div class="col s6 offset-s3"><a href="#"><label for="Uimg"><img class="hoverable responsive-img user-img preview-img" id="img_perfil" src="img/usericon.png"></label><input class="file-chooser" type="file" id="Uimg" name="Uimg" accept="image/png, image/jpeg" hidden disabled></a></div> <br>
                             <!-- <a href="#" class="hide-on-large-only	btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"></i> Alterar Imagem </a></li> Foto de Perfil do usuário-->
                        </div>
                        
                        <div class="input-field col s12 m4">
                            <input id="name" type="text" name="nome" class="validate" input name="texto" type="text" size="10" maxlength="100" value ="<?php echo $_SESSION['Nome_Completo']; ?>" disabled><!--Campo Nome do Usuário-->
                            <label for="name"> Nome </label>
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="email" type="email" name="email" class="validate" value="<?php echo $_SESSION['Email']; ?>" disabled> <!--Campo email-->
                            <label for="email"> Email </label>
                            <span class="helper-text" data-error="" data-success=""></span>
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="passuser" type="password" name="senha" class="validate" required value="<?php echo $_SESSION['Senha']; ?>" disabled>
                            <label for="passuser"> Senha </label> <!--Campo Senha-->
                        </div>
                        <input id="emailant" type="hidden" name="emailant">
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
           M.toast({html: '<span><i class="small material-icons">error_outline</i> &nbsp; Clique na imagem para alterá-la!</span>'})   
           M.AutoInit();  
        </script>

        <script src="BLL/Editar.js"></script>	
    
	</body>
</html>




