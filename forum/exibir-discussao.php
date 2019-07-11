<!DOCTYPE html>
<html>
    <head>
        <title> Aurora </title>
        <meta charset="utf-8">
        <!--Importando Ícone da Google Font-->
         <link href="css/icon.css" rel="stylesheet">
        <!--Importando materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Importando CSS Personalizado-->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--"Mostrando" ao navegador que a página é optimizada para dispostivos mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
        <title> Aurora </title>
		
    </head>
	
	<body>

			<?php	
				include 'nav_home.php';
			?>
	
			<main>	

				<section id="conteudo">

				    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <div class="row path_top">
                                    <span><i class="small material-icons"><a class="black-text" href="forum-index.php">home</a></i> &nbsp; > $Título_do_Tópico
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <table class="striped bordered">
                                <thead>
                                    <tr>
                                        <th class=""> TÍTULO DO TÓPICO </th>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="container">
                        
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="row mt-2 pl-2">
                                        <div class="col s4 m2">
                                            <img src="../img/usericon.png" class="responsive-img"> <!--Imagem do Usuário da pergunta-->
                                        </div>
                                        <div class="col s6">
                                            <div class="row mt-5">
                                                <h5> $User_Name </h5>
                                                <h6> $Data_da_postagem </h6>
                                                <h6> $tipo </h6> <!--Se é aluno ou tutor-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12">
                                            <div class="col s12">

                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non urna vel nisi imperdiet efficitur quis vitae risus. Cras luctus lacinia lacus sit amet auctor. Sed facilisis tempus interdum. Fusce non risus orci. Ut tellus orci, molestie eu iaculis ut, cursus vel sem. Nunc commodo ex eros, vel tempus lacus sodales at. Praesent a nulla non nisl aliquet sollicitudin ac nec arcu. Vivamus auctor dapibus eleifend. Sed vel dignissim ante. Fusce scelerisque nec enim vitae eleifend. Morbi sit amet eleifend odio. Vestibulum tempor mauris enim, in pulvinar massa viverra et. Integer nibh lacus, ultrices vitae dapibus et, fermentum et velit. Suspendisse vehicula diam ligula, eu egestas risus luctus quis. Curabitur justo orci, blandit ut enim iaculis, porta fermentum mauris. Morbi ut nisl eros. </p> <br>
                                            
                                            </div>
                                        </div>
                                    </div>   
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <div class="card green lighten-4"> <!--Quando a resposta for verificada, o CARD receberá a classe green lighten-4-->
                                    <div class="row">
                                        <div class="col s4 m2">
                                            <img src="../img/usericon.png" class="responsive-img"> <!--Imagem do Usuário da pergunta-->
                                        </div>
                                        <div class="col s8">
                                            <div class="row mt-5">
                                                <h5> $User_Name </h5>
                                                <h6> $Data_da_postagem </h6> &nbsp; <a class='dropdown-button' href='#' data-activates='dropdown1'><i class="material-icons black-text">more_vert</i></a>
                                                <h6> $tipo </h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12">
                                            <div class="col s12">

                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non urna vel nisi imperdiet efficitur quis vitae risus. Cras luctus lacinia lacus sit amet auctor. Sed facilisis tempus interdum. Fusce non risus orci. Ut tellus orci, molestie eu iaculis ut, cursus vel sem. Nunc commodo ex eros, vel tempus lacus sodales at. Praesent a nulla non nisl aliquet sollicitudin ac nec arcu. Vivamus auctor dapibus eleifend. Sed vel dignissim ante. Fusce scelerisque nec enim vitae eleifend. Morbi sit amet eleifend odio. Vestibulum tempor mauris enim, in pulvinar massa viverra et. Integer nibh lacus, ultrices vitae dapibus et, fermentum et velit. Suspendisse vehicula diam ligula, eu egestas risus luctus quis. Curabitur justo orci, blandit ut enim iaculis, porta fermentum mauris. Morbi ut nisl eros. </p>
                                            
                                                <p class="deep-orange-text"> // Resposta verificada! </p>
                                            </div>
                                        </div>
                                    </div>   
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                     
                                <textarea id="#" class="materialize-textarea" placeholder="Digite sua resposta aqui..." rows=20></textarea>

                            </div> 
                               
                            <div class="col s12 m12">
                                    <div class="input-field col s12 m12 center-align">
                                     <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action" onclick="">Enviar</button> <!--Botão para Postar--> 
                                    </div>
                                </div>    
                        </div>

                    </div>
				</section>
            </main>

            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!">Editar</a></li> <!--Somente o criador da resposta consegue editar ou um tutor-->
                <li><a href="#!">Apagar</a></li> <!--Somente o criador da resposta consegue apagar ou um tutor-->
                <li><a href="#!">Verificar</a></li> <!--Somente um tutor pode verificar-->
            </ul> 
        
	
	</body>
	
</html>




