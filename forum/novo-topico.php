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
	
	<body>

			<?php	
                include 'nav_home.php';
                include_once "../DAL/Class_conexao_DAL.php";                
			?>
	
			<main>	

				<section id="conteudo">

				    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <div class="row path_top">
                                    <span><i class="small material-icons"><a class="black-text" href="forum-index.php">home</a></i> &nbsp; > Novo Tópico </span>
                                </div>
                            </div>
                        </div>

                        <form name="novo_topico" action="../DAL/Forum/Class_novo_topico_DAL.php" method="POST">

                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <select id="#" name="categoria" required> <!--Campo da Categoria--> 
                                        <optgroup label="Selecione:">            
                                            <option value="duvida">Dúvidas</option>
                                            <option value="licao">Lição de Casa</option>
                                            <option value="mapas">Mapas Mentais</option>
                                        </optgroup>     
                                    </select>  
                                    <label>Categoria</label>              
                                </div>  

                                <div class="input-field col s12 m6 l6">
                                    <select id="#" name="disciplina" required> <!--Campo da disciplina correspondente--> 
                                        <optgroup label="Selecione:">            
                                            <!-- pega as materias no banco e coloca na caixa de seleção -->
                                            <?php include "../DAL/Forum/Class_disciplina_DAL.php"; ?>
                                        </optgroup>     
                                    </select>  
                                    <label>Disciplina</label>              
                                </div>
                                <!-- mosta os conteudos referentes a disciplina selecionada, ou pelo menos e o que deveria fazer -->
                                <?php include "../DAL/Forum/Class_conteudo_DAL.php"; ?>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <input id="titulo-topico" type="text" name="titulo-topico" class="validate" required>
                                    <label for="user"> Título do Tópico </label> <!--Campo do título da discussão-->
                                </div>
                                
                            </div>

                            <div class="row">
                                    <div class="input-field col s12 m12 l12">
                                        <textarea id="mensagem" name="mensagem" class="materialize-textarea" placeholder="Digite sua mensagem aqui...
                                        " rows=10></textarea>
                                    </div>
                                    <!--Conteúdo da Discussão-->
                            </div>

                            <div class="row">
                                <div class="col s12 m12">
                                    <div class="input-field col s12 m12 center-align">
                                     <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action" onclick="">Postar</button> <!--Botão para Postar--> 
                                    </div>
                                </div>
                            </div>
                        </form>
                           
                    </div>
				</section>
            </main>
        
	
		 
	
		 <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
         <script type="text/javascript" src="js/materialize.min.js"></script>
         <script> 
           $(document).ready(function() {
                $('select').material_select();
            });
         </script>

	
	</body>
	
</html>




