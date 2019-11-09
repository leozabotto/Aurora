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

        <script src="BLL/FiltrarQ.js"></script>
		
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
                    <form name="exercicios" action="DAL/Exercicios/Class_busc_exercicio.php" method="POST">
                        <div class="input-field col s12 m3 l3">
                            <select id="id_disciplina" name="#" required> <!--Campo da Disciplina--> 
                                <option value="" disabled selected> Selecione </option>
                                <?php include "DAL/Forum/Class_disciplina_DAL.php"; ?>     
                            </select>  
                            <label>Disciplina</label>              
                        </div>  
                        <div id="conteudo" name="conteudo" class="input-field col s12 m3 l3"> <!--Campo do Conteúdo--> 
                            <select id="cont" required> 
                              
                                <option value="" disabled selected> Selecione a Disciplina </option>
                           
                              
                            </select>
                          <label> Conteúdo </label>              
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <select id="respq" name="respq" required> <!--Campo de Respondida S ou N--> 
                                <optgroup label="Selecione:"> 
                                    <option value="n">Não</option>           
                                    <option value="s">Sim</option>   
                                </optgroup>     
                            </select>  
                            <label>Respondidas?</label>              
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <button class="btn waves-effect waves-light center-align col s12 m12 l12 orange darken-2" type="button" name="" onclick="FiltroV()">Filtrar</button> <!--Botão para filtrar-->
                        </div>
                    </form>
                    </div>
                </div>
                        <div id="lista">
                            <div class="collection">
                                <form name="questao" action="questao.php" method = "POST">
                                    <input type="hidden" name ="questaoesc" id="questaoesc">
                                    <?php 
                                    if(isset($_SESSION['busca']) && isset($_SESSION['busca2']))
                                    {
                                        $n = 0;
                                        while($n < $_SESSION['n'])
                                        {
                                            if(strlen($_SESSION['pags'][$n]['Enunciado']) >= 107)
                                            {
                                                $Enunciado = substr($_SESSION['pags'][$n]['Enunciado'], 0, 107) . "...";
                                            }
                                            else
                                            {
                                                $Enunciado = $_SESSION['pags'][$n]['Enunciado'];
                                            }
                                            echo
                                            '
                                                <a onclick="AbrirQ('.$n.')" class="collection-item"><b>Exercício '. $_SESSION['pags'][$n]['CodQ'] .'</b> &nbsp; &nbsp; '. $Enunciado .' </a>
                                            ';
                                            $n++;
                                        }
                                        unset($_SESSION['busca2']);
                                    }
                                ?>
                                </form>
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
							    options += '<option value="' + j[i].cod_tema + '">' + j[i].tema + '</option>';
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




