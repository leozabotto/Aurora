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

        <script src="BLL/ResponderQ.js"></script>
		
    </head>
	
	<body class="grey lighten-5">

		<?php	
            include 'nav_home.php';
            include_once "DAL/Class_conexao_DAL.php";
            $n = $_POST['questaoesc']; 
		?>
	
        <main>
            <div class="container">
                <div class="row mt-2">
                    <div class="col s12 m12 center-align"> 
                        <h4>Exercício - <?php echo $_SESSION['pags'][$n]['CodQ'];?> </h4>
                    </div> 
                </div>
                <div id="questao"> <!--Essa div contem a questão e suas respectivas alternativas--> 
                    <div class="row">
                        <div class="col s12">
                            <form name="responder" action="" method="POST">
                            <input type="hidden" name ="RespU" id="RespU">
                                <?php 
                                //Caso precise limpar tudo
                                //unset($_SESSION['busca']);
                                if(isset($_SESSION['busca'])){
                                echo ' 
                                <p> '. $_SESSION['pags'][$n]['Enunciado'] .' </p>
                                <div class="collection">
                                    <a  class="collection-item"><b>A</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['A'] .' </a>
                                    <a  class="collection-item active green"><b>B</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['B'] .' </a> <!--A alternativa certa aparece como verde -->
                                    <a  class="collection-item active red"><b>C</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['C'] .' </a> <!-- Caso o usuário responda errado, a alternativa respondida recebe a classe active red-->
                                    <a  class="collection-item"><b>D</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['D'] .' </a>
                                    <a  class="collection-item"><b>E</b> &nbsp; &nbsp; '. $_SESSION['pags'][$n]['E'] .' </a>
                                </div>
                                <!-- uma vez respondida, as questões não podem mais ser respondidas -->
                                ';}?>
                            </form>
                        </div>
                    </div>
                    <?php 
                    if(isset($_SESSION['busca']) && $_SESSION['RespQ'] == "s"){
                    echo '
                    <div class="row"> <!-- essa row só aparece depois que o usuário responder -->
                        <div class="col s12">
                            <h6>Resolução</h6>
                        </div>
                        <div class="col s12">
                            <p> '.$_SESSION['pags'][$n]['Resol'].'</p>
                            <!-- <p> é a resolução do banco, só pode aparecer depois que a questão for respondida -->
                        </div>
                        <div class="col s12">
                        <b> Dificuldade: </b> '. $_SESSION['pags'][$n]['Dificuldade'] .' </span>
                        </div>
                    </div>
                </div>

                <div class="row center-align">

                    <div class="col s12 m12">
                        <!--Paginação de acordo com o número de questões-->
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
                ';}?>
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




