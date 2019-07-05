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
		
    </head>
	
	<body onload=Materialize.toast>

			<?php	
                include 'nav_home.php';                
			?>
	
			<main>	

				<section id="conteudo">

				    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <h5 class="user_forum"> Olá, <?php echo $_SESSION['User_Name']; ?> </h5>
                                <h6 class="user_forum"> Bem-vindo ao Fórum Aurora </h6>
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
                                        <th class=""> Categorias </th>
                                        <th class="center-align"> Comentários </th>
                                        <th class="center-align"> Discussões </th>
                                        <!--<th class="center-align"> Post Recente </th> -->
                                    </tr> 
                                    <tr>
                                        <th> Disciplinas </th>
                                    </tr> 
                                </thead>
                              
                                    
                                

                                <tbody>
                                    <tr>
                                        <td> <i class="green-text material-icons"> spellcheck </i> <a class="" href="af-categorias-pt.php"> Português </a></td>
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS PORTUGUÊS-->
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE DISCUSSÕES PORTUGUÊS-->
                                        <!--<td  class="center-align"> <span> $nome_post (link) <span> </td>  POST RECENTE PORTUGUÊS-->
                                    </tr>
                                
                                    <tr>
                                        <td> <i class="red-text material-icons"> add </i> <a class="" href="forum_disciplina_mat.php"> Matemática </a> </td>
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS MATEMÁTICA-->
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE DISCUSSÕES MATEMÁTICA-->
                                        <!--<td  class="center-align"> <span> $nome_post (link) <span> </td>  POST RECENTE MATEMÁTICA-->
                                    </tr>
                                </tbody>
                            <table>
                        

                           <table class="striped bordered">
                               <thead>
                                    <tr>
                                        <th> Geral </th>
                                        
                                    </tr> 
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><i class="yellow-text material-icons"> lightbulb_outline </i> <a class="" href=""> Dicas </a> </td>
                                      <!--  <td  class="center-align"> <span> 0 <span> </td>  --NÚMERO DE COMENTÁRIOS dicas
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS dicas
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS dicas-->
                                    </tr>
                                    <tr>
                                        <td><i class="blue-text material-icons"> image </i> <a class="" href="">  Mapas Mentais </a> </td>
                                         <!--   <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS mapas
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS mapas
                                        <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS mapas-->
                                    </tr>
                                    <tr>
                                        <td> <i class="pink-text material-icons"> chat  </i> <a class="" href=""> Chat </a> </td>
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
		 
		<script>
             $(document).ready(function(){
                $('.tooltipped').tooltip({delay: 50});
            });

            var $toastContent = $('<span><i class="small material-icons">error_outline</i> &nbsp; Tire suas dúvidas aqui!</span>');
            Materialize.toast($toastContent, 10000);
        </script>
        
	
	</body>
	
</html>




