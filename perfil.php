<?php session_start(); ?>
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
		
    </head>
	
	<body class="grey lighten-3" onload=Materialize.toast>

			<?php	
				include 'nav_home.php';
			?>
	
			<main>	

                <div class="container">
                    <div class="row center-align mt-5">
                        <div class="col s12">
                            <h5> Meu Perfil </h5>
                        </div>
                    </div>

                    <div class="row center-align mt-5">
                        <div class="col s12 m7"> <!-- IMAGEM DO USUÁRIO - pode ser editada de o usuário clicar sobre o link ou no botão e tem de ser recortada para 512x512 px-->
                            <div class="col s6 offset-s3"><a href="#"><img class="hoverable responsive-img user-img" id="#" src="img/usericon.png"></a></div> <br>
                              <a href="#" class="hide-on-large-only	btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"></i> Alterar Imagem </a></li><!--Foto de Perfil do usuário-->
                        </div>
                        
                        <div class="input-field col s12 m4 mt-2">
                            <input id="name" type="text" placeholder="$nomedousuario" name="nome" class="validate"><!--Campo Nome do Usuário-->
                            <label for="name"> Nome </label>
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="email" type="email" placeholder="$email" name="email" class="validate"> <!--Campo email-->
                            <label for="email"> Email </label>
                            <span class="helper-text" data-error="" data-success=""></span>
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="passuser" type="password" placeholder="*******" name="senha" class="validate" required>
                            <label for="passuser"> Senha </label> <!--Campo Senha-->
                        </div>
                    </div>

                    <div class="row center-align">
                        <div class="col s12 m12">

                            <a href="#" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> create </i> Editar </a></li>

                                <!--Os botões abaixo só aparecem se o usuário clicar no botão "Editar"

                                *Quando o usuário clicar em editar, o botão "Editar" some;
                                *Os botões abaixo aparecem

                                -->

                            &nbsp;
                            <a href="#" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> save </i> Salvar </a></li>
                            &nbsp; 
                            <a href="#" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> </i> Cancelar </a></li>
                            
                        </div>

                    </div>
                </div>
			</main>
	
		 
	
		 <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
         <script type="text/javascript" src="js/materialize.min.js"></script>
         <script>
             $(document).ready(function(){
                $('.tooltipped').tooltip({delay: 50});
            });

            var $toastContent = $('<span><i class="small material-icons">error_outline</i> &nbsp; Clique na imagem para alterá-la!</span>');
            Materialize.toast($toastContent, 10000);
        </script>
		 
		
	
	</body>
	
</html>




