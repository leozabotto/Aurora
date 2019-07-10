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
	
	<body class="grey lighten-5">

			<?php	
				include 'nav_home.php';
			?>
	
			<main>	

                <div class="container"> 
                    <div class="row mt-5">
                        <div class="col s12">
                            <ul id="#" class="tabs grey lighten-5">
                                <li class="tab col s3"><a class="active" href="#pt">Português</a></li>
                                <li class="tab col s3"><a href="#mat">Matemática</a></li>
                            </ul>
                        </div>  
                    </div>                  
            
                    <div id="pt" class="row center-align">
                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/cards/pt/gramatica.png">
                                </div>
                    
                                <div class="card-reveal">
                                     <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                      <p>Aqui vão os links para os conteúdos relacionados.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/cards/pt/literatura.png">
                                </div>
                    
                                <div class="card-reveal">
                                     <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                      <p>Aqui vão os links para os conteúdos relacionados.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="mat" class="row center-align">
                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/cards/mat/matriz.png">
                                </div>
                    
                                <div class="card-reveal">
                                     <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                      <p>Aqui vão os links para os conteúdos relacionados.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="img/cards/mat/funcao.png">
                                </div>
                    
                                <div class="card-reveal">
                                     <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                      <p>Aqui vão os links para os conteúdos relacionados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
				
			</main>
	
		 
	
		<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
         
        <script>
            $(document).ready(function(){
                $('ul.tabs').tabs({
            });
  });

        </script>
		 
		
	
	</body>
	
</html>




