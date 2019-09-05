<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--Importando Ícone da Google Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                                    <option value="Dúvidas">Dúvidas</option>
                                    <option value="Lição de Casa">Lição de Casa</option>
                                    <option value="mapas">Mapas Mentais</option>
                                </optgroup>     
                            </select>  
                            <label>Categoria</label>              
                        </div>  

                        <div class="input-field col s12 m6 l6">
                            <select id="id_disciplina" name="disciplina" required> <!--Campo da disciplina correspondente--> 
                                <optgroup label="Selecione:">            
                                    <!-- pega as matérias no banco e coloca na caixa de seleção -->
                                    <?php include "../DAL/Forum/Class_disciplina_DAL.php"; ?>
                                </optgroup>     
                            </select>  
                            <label>Disciplina</label>              
                        </div>

                        <!-- mostra os conteudos referentes a disciplina selecionada, ou pelo menos e o que deveria fazer -->
                        <div class="input-field col s12 m6 l6">
                            <select id="id_conteudo" name="conteudo" required> <!--Campo do Conteúdo se Disciplina for PORTUGUÊS, só pode aparecer se a disciplina for selecionada--> 
                                            
                            </select>  
                            <label>Conteúdo</label>    
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <input id="titulo-topico" type="text" name="titulo-topico" class="validate" required>
                            <label for="user"> Título do Tópico </label> <!--Campo do título da discussão-->
                        </div>            
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <textarea id="mensagem" name="mensagem" class="materialize-textarea" placeholder="Digite sua mensagem aqui... " rows=10></textarea>
                        </div> <!--Conteúdo da Discussão-->
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
		
        </main>
        

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">google.load("jquery", "1.4.2");</script>
		
        <script type="text/javascript" charset="UTF-8">
            $(function()
            {   //quando selecionar a disciplina
                $('#id_disciplina').change(function()
                {
                    
                    if( $(this).val()) 
                    {   //oculta o campo conteudo
                        $('#id_conteudo').hide();                   
                            //chama o arquivo e executa o select que tambem transfere os dados para uma variavel js
                            $.getJSON('../DAL/forum/Class_conteudo_DAL.php?search=',{id_conteudo: $(this).val(), ajax: 'true'}, function(j)
                            {   //inicia o for que mostra os conteudos
                                $('#id_conteudo').material_select();
                                var options = '<optgroup label="Selecione:">';	
                                for (var i = 0; i < j.length; i++) 
                                {
                                    options += '<option value="' + j[i].cod_conteudo + '">' + j[i].tema + '</option>';
                                }//mostra os dados na tela	
                                $('#id_conteudo').html(options).show();                            
                            });
                    } 
                    else 
                    {   //se nao funcionar nao faz nada
                        $('#id_conteudo').html('<option value="">– Escolha Conteudo –</option>');
                    }
                });
            });
        </script>
        
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        
        <script>
            M.AutoInit();
        </script>
	
	</body>
	
</html>




