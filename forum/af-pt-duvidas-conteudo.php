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
				include 'nav_home.html';
			?>
	
			<main>	

				<section id="conteudo">

				    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <div class="row path_top">
                                    <span><i class="small material-icons"><a class="black-text" href="forum-index.php">home</a></i> &nbsp; > <a href="af-categorias-pt.php"> Português </a> > <a href="af-pt-duvidas.php"> Dúvidas </a> > <a href="forum-index.php"> Conteúdo </a>  </span>
                                </div>
                           
                                <div class="input-field col s12">
                                    <!--<i class="material-icons prefix">search</i>-->
                                    <input id="icon_prefix" type="text" class="validate" placeholder="Digite aqui para pesquisar...">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                           <table class="striped bordered">
                               <thead>
                                    <tr>
                                        <th class=""> Discussão </th>
                                        <th class="center-align"> Comentários </th>
                                        <th class="center-align"> Visualizações </th>
                                        <!--<th class="center-align"> Post Recente </th> -->
                                    </tr>  
                                </thead>
                              
                                    
                                

                                <tbody>
                                    <tr>
                                        <td> <a class="" href="discussoes/000001/titulo-da-discussao.php"> &nbsp; Título da Discussão </a></td> 
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS-->
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE VISUALIZAÇÕES-->
                
                                    </tr>
                                </tbody>
                            <table>
                        </div>

                        <div class="row center-align">
                            <div class="col s12">
                                <a href="#" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> create </i> Novo Tópico</a></li>
                            </div>
                        </div>
                    </div>

				</section>
            </main>
        
	
		 
	
		 <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		 <script type="text/javascript" src="js/materialize.min.js"></script>
		 
        
	
	</body>
	
</html>



