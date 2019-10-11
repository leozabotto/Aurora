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
            include_once "DAL/Class_conexao_DAL.php"; 
		?>
	
        <main>
            <div class="container">
                <div class="row mt-2">
                    <div class="col s12 m12 center-align"> 
                        <h4>Exercícios</h4>
                    </div> 
                </div>
                <div class="row center-align">

                    <div class="col s12 m12 l12">
                        <div class="input-field col s12 m3 l3">
                            <select id="id_disciplina" name="#" required> <!--Campo da Disciplina--> 
                                <option value="" disabled selected> Selecione </option>
                                <?php include "DAL/Forum/Class_disciplina_DAL.php"; ?>     
                            </select>  
                            <label>Disciplina</label>              
                        </div>  
                        <div id="conteudo" class="input-field col s12 m3 l3"> <!--Campo do Conteúdo--> 
                            <select name="cont" required> 
                              
                                <option value="" disabled selected> Selecione a Disciplina </option>
                           
                              
                            </select>
                          <label> Conteúdo </label>              
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <select id="#" name="#" required> <!--Campo de Respondida S ou N--> 
                                <optgroup label="Selecione:"> 
                                    <option value="#">Não</option>           
                                    <option value="#">Sim</option>   
                                </optgroup>     
                            </select>  
                            <label>Respondidas?</label>              
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <button class="btn waves-effect waves-light center-align col s12 m12 l12 orange darken-2" type="button" name="" onclick="">Filtrar</button> <!--Botão para filtrar-->
                        </div>
                    </div>
                </div> 

                <div id="questao"> <!--Essa div contem a questão e suas respectivas alternativas--> 
                    <div class="row">
                        <div class="col s12">
                            <form action="" method=""> 
                                <h6><strong>CODQUEST <span class="red-text"> CÓDIGO DA QUESTÃO NO BANCO </span> </strong>  </h6> <!--código da questão no banco -->
                                <p> Nullam non risus quis orci aliquet finibus. Fusce consequat nibh et dui iaculis rhoncus. Aliquam eu sem sem. Proin laoreet nisl sed dui egestas luctus. Cras at facilisis quam, a fermentum lorem. Suspendisse velit ex, semper eu accumsan eleifend, pulvinar et nunc. Morbi eleifend augue vel dolor finibus, at aliquet arcu tempor. Proin et felis auctor, mattis odio eget, volutpat risus. Quisque ultrices, est vel vehicula cursus, dui orci pellentesque ante, in interdum mauris est non massa? <span class="red-text"> ENUNCIADO DA QUESTÃO </span> </p>

                                <!-- Só aparece se a questão tiver imagem... -->
                                <p> <img src="img/BannerLogo.png" class="responsive-img"/></p>
                                <span class="red-text"> SE A QUESTÃO TIVER IMAGEM, ELA APARECERÁ ACIMA. <BR> <BR> ABAIXO SÃO AS ALTERNATIVAS, CADA LINK CORRESPONDE A UMA ALTERNATIVA, CLICOU -> RESPONDEU. <BR> SE A ALTERNATIVA ESTIVER CORRETA, ELA RECEBERÁ A CLASSE "ACTIVE GREEN" // CASO ESTEJA ERRADA, RECEBERÁ A CLASSE "ACTIVE RED"  </span>
                                

                                <div class="collection">
                                    <a href="#!" class="collection-item"><b>A</b> &nbsp; &nbsp; Cras at facilisis </a>
                                    <a href="#!" class="collection-item active green"><b>B</b> &nbsp; &nbsp; Aliquam eu sem sem</a> <!--A alternativa certa aparece como verde -->
                                    <a href="#!" class="collection-item active red"><b>C</b> &nbsp; &nbsp; Morbi eleifend augue</a> <!-- Caso o usuário responda errado, a alternativa respondida recebe a classe active red-->
                                    <a href="#!" class="collection-item"><b>D</b> &nbsp; &nbsp;  Nullam non risus quis </a>
                                    <a href="#!" class="collection-item"><b>E</b> &nbsp; &nbsp; Quisque ultrices </a>
                                </div>
                                <!-- uma vez respondida, as questões não podem mais ser respondidas -->
                            </form>
                        </div>
                    </div>
                
                    <span class="red-text"> ESSA ROW COM RESOLUÇÃO E DIFICULDADE SÓ APARECE DEPOIS DE RESPONDER. UMA VEZ RESPONDIDA, SEMPRE APARECERÁ.  </span> 
                    <div class="row"> <!-- essa row só aparece depois que o usuário responder -->
                        <div class="col s12">
                            <h6>Resolução</h6>
                        </div>
                        <div class="col s12">
                            <p> Suspendisse velit ex, semper eu accumsan eleifend, pulvinar et nunc. Morbi eleifend augue vel dolor finibus, at aliquet arcu tempor. Proin et felis auctor, mattis odio eget, volutpat risus. Quisque ultrices, est vel vehicula cursus, dui orci pellentesque ante, in interdum mauris est non massa  <span class="red-text"> RESOLUÇÃO CADASTRADA NO BANCO  </span> </p>
                            <!-- <p> é a resolução do banco, só pode aparecer depois que a questão for respondida -->
                        </div>
                        <div class="col s12">
                        <b> Dificuldade: </b> $dificuldade <span class="red-text"> DIFICULDADE CADASTRADA NO BANCO  </span>
                        </div>
                    </div>
                </div>

                <div class="row center-align">

                    <div class="col s12 m12">
                        <!--Paginação de acordo com o número de questões-->
                        <span class="red-text"> CADA QUESTÃO CORRESPONDE A UMA PÁGINA. PESQUISAR COMO FUNCIONA A PAGINAÇÃO. QUANDO CLICAR NA QUESTÃO 2, POR EXEMPLO, ELA RECEBERÁ A CLASSE "active" E A SELECIONADA ANTERIORMENTE RECEBERÁ A "waves-effect" DE VOLTA.  </span> 
                        <ul class="pagination">
                            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li><!--desabilitado quando estiver na primeira-->
                            <li class="active"><a href="#quest1">1</a></li>
                            <li class="waves-effect"><a href="#quest2">2</a></li>
                            <li class="waves-effect"><a href="#!">3</a></li>
                            <li class="waves-effect"><a href="#!">4</a></li>
                            <li class="waves-effect"><a href="#!">5</a></li>
                            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li><!--desabilitado quando estiver na última-->
                        </ul>

                    </div> 
                </div>
            </div>

        </main>

        <script type="text/javascript">google.load("jquery", "1.12.1");</script>
		
        <script type="text/javascript" charset="UTF-8">

        $(function()
        {   //quando selecionar a disciplina
            $('#id_disciplina').change(function()
            {
                $('#conteudo').html("");
                 //limpa campo conteúdo
               
                if( $(this).val()) 
                {  

                    //chama o arquivo e executa o select que tambem tranfere os dados para uma variavel js
                    $.getJSON('DAL/forum/Class_conteudo_DAL.php?search=',{id_conteudo: $(this).val(), ajax: 'true'}, function(j)
                        {   //inicia o for que mostra os conteudos
                            var options = ' <option value="" disabled selected> Selecione </option>';	
                            for (var i = 0; i < j.length; i++) 
                            {
							    options += '<option value="' + j[i].cod_conteudo + '">' + j[i].tema + '</option>';
						    }//mostra os dados na tela
                            $('#conteudo').html(" <select id='id_conteudo' name='conteudo' required> </select> <label>Conteúdo</label> "); 
                            $('#id_conteudo').append(options); 
                            $('select').formSelect();
                                                         
                                                     
					    });
                    ;
                } 
                else 
                {   //se nao funcionar nao faz nada
					$('#id_conteudo').html('<option value="">– Escolha Conteudo –</option>');
				}
			});
		});

		</script>

        <script>
            M.AutoInit();
        </script>
    
	</body>
	
</html>




