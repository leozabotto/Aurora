<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/icon.css" rel="stylesheet">
        <!--Importando materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Importando CSS Personalizado-->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--"Mostrando" ao navegador que a página é optimizada para dispostivos mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="BLL/ValidarQ.js"></script>
        <!--Importando arquivo de inserir questões-->
        <style>
       
        </style>
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
                    
                        <table class="bordered">
                            <thead>
                            <tr>
                                <th class="center-align"> <h4>Gerenciar Plataforma</h4> </th>
                            
                            </thead>
                        </table>
                    </div> 
                </div>
                <div class="row mt-2">
                    <div class="col s12">
                        <h5>Adição de Conteúdos</h5>
                        <ul id="#" class="tabs grey lighten-5 mt-2">
                            <li class="tab col s3"><a class="active" href="#cont">Conteúdo</a></li>
                            <li class="tab col s3"><a href="#quest">Questões</a></li>
                            <li class="tab col s3"><a href="#inst">Passo a Passo</a></li>  
                        </ul>
                    </div>  
                </div>

                <div id="cont" class="row"> <!--Adicionar Conteúdo-->

                    <form name="cad_conteudo" action="DAL/Gerir/Class_cad_conteudo_DAL.php" method="POST">
                        <div class="input-field col s12 m3 l3">
                            <select id="id_disciplina" name="disciplina" required> <!--Campo da Disciplina--> 
                                 
                                <!-- pega as matérias no banco e coloca na caixa de seleção -->
                                <option value="" disabled selected> Selecione </option>
                                <?php include "DAL/Forum/Class_disciplina_DAL.php"; ?>
                              
                            </select>  
                            <label>Disciplina</label>              
                        </div>  
                        <div id="conteudo" class="input-field col s12 m3 l3">
                            <select name="cont" required> 
                              
                                <option value="" disabled selected> Selecione a Disciplina </option>
                             
                                
                            </select>
                            <label> Conteúdo </label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input id="titulo-topico" type="text" name="titulo-topico" class="validate" required>
                            <label for="titulo-topico"> Título do Conteúdo </label> <!--Campo do título da discussão-->
                        </div> 
                        <div class="input-field col s12 m12 l12">
                            <textarea id="conteudo" name="texto" class="materialize-textarea" required></textarea>
                            <label> Conteúdo </label>
                            <span class="helper-text">Digite seu conteúdo na forma de HTML. Você pode usar Materialize CSS na postagem. </span>
                        </div>
                        <div class="col s12 m12">
                            <div class="input-field col s12 m12 center-align">
                                <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action" onclick="">Enviar</button> <!--Botão para Postar--> 
                            </div>
                        </div>
                    </form>
                </div>

                <div id="quest" class="row"> <!--Adicionar Conteúdo-->

                    <form name="cad_quest" action="DAL/Gerir/Class_cad_quest_DAL.php" method="POST">
                        <div class="input-field col s12 m3 l3">
                            <select id="id_disciplina2" name="disciplina" required> <!--Campo da Disciplina--> 
                                     
                                <!-- pega as matérias no banco e coloca na caixa de seleção -->
                                <option value="" disabled selected> Selecione </option>
                                <?php include "DAL/Forum/Class_disciplina_DAL.php"; ?>
                                
                            </select>  
                            <label>Disciplina</label>              
                        </div>  
                        <div id="conteudo2" class="input-field col s12 m3 l3">
                            <select name="cont" required> 
                              
                                <option value="" disabled selected> Selecione a Disciplina </option>
                             
                                
                            </select>
                            <label> Conteúdo </label>
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <select id="difq" name="dificuldade" required> <!--Campo da dificuldade--> 
                                <optgroup label="Selecione:">        
                                    <option value="F">Fácil</option>
                                    <option value="M">Média</option>
                                    <option value="D">Difícil</option>
                                </optgroup>     
                            </select>  
                            <label>Dificuldade</label>              
                        </div> 
                        <div class="input-field col s12 m3 l3">
                            <select id="respq" name="resposta" required> <!--Campo da Resposta--> 
                                <optgroup label="Selecione:">        
                                    <option value="altA">A</option>
                                    <option value="altB">B</option>
                                    <option value="altC">C</option>
                                    <option value="altD">D</option>
                                    <option value="altE">E</option>
                                </optgroup>     
                            </select>  
                            <label>Alternativa Correta</label>              
                        </div> 
                        <div class="input-field col s12 m12 l12">
                            <textarea id="enunq" name="enunciado" class="materialize-textarea" required></textarea>
                            <label> Enunciado da Questão </label>
                            <span class="helper-text">Digite seu conteúdo na forma de HTML. Você pode usar Materialize CSS na postagem. </span>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input id="alt-a" type="text" name="altA" required>
                            <label for="alt-a"> Alternativa A </label> <!--Campo de alternativa-->
                            <span class="helper-text">Digite apenas a resposta, não inclua a letra da alternativa. </span>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input id="alt-b" type="text" name="altB" required>
                            <label for="alt-b"> Alternativa B </label> <!--Campo de alternativa-->
                            <span class="helper-text">Digite apenas a resposta, não inclua a letra da alternativa. </span>
                        </div>  
                        <div class="input-field col s12 m12 l12">
                            <input id="alt-c" type="text" name="altC" required>
                            <label for="alt-c"> Alternativa C </label> <!--Campo de alternativa-->
                            <span class="helper-text">Digite apenas a resposta, não inclua a letra da alternativa. </span>
                        </div>  
                        <div class="input-field col s12 m12 l12">
                            <input id="alt-d" type="text" name="altD" required>
                            <label for="alt-d"> Alternativa D </label> <!--Campo de alternativa-->
                            <span class="helper-text">Digite apenas a resposta, não inclua a letra da alternativa. </span>
                        </div>  
                        <div class="input-field col s12 m12 l12">
                            <input id="alt-e" type="text" name="altE" required> <!-- Remover Required após validação -->
                            <label for="alt-e"> Alternativa E </label> <!--Campo de alternativa-->
                            <span class="helper-text">Digite apenas a resposta, não inclua a letra da alternativa. </span>
                        </div>    
                        <div class="input-field col s12 m12 l12">
                            <textarea id="resolq" name="resolucao" class="materialize-textarea" required></textarea>
                            <label> Resolução </label>
                            <span class="helper-text">Digite seu conteúdo na forma de HTML. Você pode usar Materialize CSS na postagem. </span>
                        </div>
                        <div class="col s12 m12">
                            <div class="input-field col s12 m12 center-align">
                                <button class="btn waves-effect waves-light orange darken-2" name="action" onclick="FunQues()">Enviar</button> <!--Botão para Postar--> 
                            </div>
                        </div>
                    </form>
                </div>

                <div id="inst">
                    <h5><b> Adição de Conteúdo </b></h5>
                    <p class="red-text"> É importante que você tenha conhecimento de HTML e Materialize CSS para fazer suas postagens. As intruções do materialize encontram-se no final dessa seção. Se preferir, <a class="red-text" href="#instmaterialize"><u>clique aqui</u></a> para ir diretamente à seção do Materialize CSS. </p>
                    <p> Para fazer a adição de conteúdos na plataforma, siga os seguintes passos: </p>
                    <p> 1º Preencha corretamente os seguintes campos: </p>
                    <img class="responsive-img" src="img/inst/1.png"/>
                    <p> 2º Baixe o arquivo modelo e escreva nele o seu código HTML: </p>
                    <p> LINK LINK LINK LINK </p>
                    <p> Para escrever, basta usar um editor de textos qualquer ou alguma IDE (recomenda-se o Visual Studio Code). </p>
                    <p> 3º Abra a página para verificar se está de acordo com o desejado:
                    <div class="col s12">
                        <img class="responsive-img" src="img/inst/2.png"/>
                    </div>
                    <p> 4º Caso tudo esteja certo, copie o código inteiro e cole no campo de conteúdo. Em seguida, clique em "Enviar": </p>
                    <img class="responsive-img" src="img/inst/3.png"/>
                    <p> 5º Após o envio, você receberá o seguinte aviso: </p>
                    <div class="col s12">
                        <img class="responsive-img" src="img/inst/4.png"/>
                    </div>
                    <p> Pronto! Agora basta esperar o email de confirmação dos nossos administradores informando se o seu conteúdo foi aprovado. Caso esteja tudo certo, ele se tornará disponível para todos os alunos acessarem. </p>
                    <p> É importante manter uma <b> cópia de segurança do seu conteúdo</b>, pois caso ele seja recusado será necessário fazer as alterações descritas e enviá-lo para análise novamente!
                    <p> Mais instruções sobre com anexar imagens estão inclusas no arquivo modelo. </p>
                </div>    

                <?php if ($_SESSION['Categoria'] == "ADM") {

                echo '                          

                <div class="row mt-2">
                    <div class="col s12 m12"> 
                        <h5>Aprovação de Conteúdos</h5>       
                        <ul id="#" class="tabs grey lighten-5 mt-2">
                            <li class="tab col s3"><a class="active" href="#contp">Conteúdos Pendentes</a></li>
                            <li class="tab col s3"><a href="#questp">Questões Pendentes</a></li>
                        </ul>
                    </div>  
                </div>

                <div id="contp">
                    <div class="row">
                        <table class="striped center-align responsive-table">
                            <thead>
                                <tr>
                                    <th class=""> Título </th>
                                    <th class=""> Disciplina </th>
                                    <th class=""> Conteúdo </th>
                                    <th class=""> Autor </th>
                                    <th class=""> Ação</th>
                                </tr> 
                            </thead>
                            <tbody>

                                <tr> <!-- FAZER SELECT NO BANCO -->
                                    <td> <a href="exibir.php">$TITULO_DO_CONTEUDO </td>
                                    <td> $DISCIPLINA </td>
                                    <td> $TEMA </td>
                                    <td> $AUTOR </td>
                                    <td> <button class="btn waves-effect waves-light green darken-2" name="action" onclick=""> V </button> <button class="btn waves-effect waves-light red darken-2" name="action" onclick=""> X </button> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                
                <div id="questp">
                    <div class="row">
                        <table class="striped center-align responsive-table">
                            <thead>
                                <tr>
                                    <th class=""> Código </th>
                                    <th class=""> Disciplina </th>
                                    <th class=""> Conteúdo </th>
                                    <th class=""> Enviada por: </th>
                                    <th class=""> Ação</th>
                                </tr> 
                            </thead>
                            <tbody>

                                <tr> <!-- FAZER SELECT NO BANCO -->
                                    <td> <a href="exibir.php">$COD_QUESTAO </td>
                                    <td> $DISCIPLINA </td>
                                    <td> $TEMA </td>
                                    <td> $AUTOR </td>
                                    <td> <button class="btn waves-effect waves-light green darken-2" name="action" onclick=""> V </button> <button class="btn waves-effect waves-light red darken-2" name="action" onclick=""> X </button> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> 

                <div class="row mt-2">
                    <div class="col s12 m12"> 
                        <h5>Aprovação de Tutoria</h5>       
                        <ul id="#" class="tabs grey lighten-5 mt-2">
                            <li class="tab col s3"><a class="active" href="#solic">Solicitações</a></li>
                            <li class="tab col s3"><a href="#tut">Atuais Tutores</a></li>
                        </ul>
                    </div>  
                </div>

                <div id="solic">
                    <div class="row">
                        <table class="striped center-align responsive-table">
                            <thead>
                                <tr>
                                    <th class=""> Nome </th>
                                    <th class=""> Email </th>
                                    <th class=""> Nome de Usuário </th>
                                    <th class=""> Ação</th>
                                </tr> 
                            </thead>
                            <tbody>

                                <tr> <!-- FAZER SELECT NO BANCO -->
                                    <td> $NOME_SOLICITANTE </td>
                                    <td> $EMAIL_SOLICITANTE</td>
                                    <td> $NICK_SOLICITANTE </td>
                                    <td> <button class="btn waves-effect waves-light green darken-2" name="action" onclick=""> V </button> <button class="btn waves-effect waves-light red darken-2" name="action" onclick=""> X </button> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="tut">
                    <div class="row">
                        <table class="striped center-align responsive-table">
                            <thead>
                                <tr>
                                    <th class=""> Nome </th>
                                    <th class=""> Email </th>
                                    <th class=""> Nome de Usuário </th>
                                    <th class=""> Ação</th>
                                </tr> 
                            </thead>
                            <tbody>

                                <tr> <!-- FAZER SELECT NO BANCO -->
                                    <td> $NOME_TUTOR </td>
                                    <td> $EMAIL_TUTOR</td>
                                    <td> $NICK_TUTOR </td>
                                    <td> <button class="btn waves-effect waves-light red darken-2" name="action" onclick=""> X </button> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                ';
                }
                ?>


            </div>

            
		
        </main>
    
		
        <script type="text/javascript" charset="UTF-8">

      
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
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

        <script type="text/javascript" charset="UTF-8">

            $(function()
            {   //quando selecionar a disciplina
                $('#id_disciplina2').change(function()
                {
                    $('#conteudo2').html("");
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
                                $('#conteudo2').html(" <select id='id_conteudo2' name='conteudo2' required> </select> <label>Conteúdo</label> "); 
                                $('#id_conteudo2').append(options); 
                                $('select').formSelect();
                                                            
                                                        
                            });
                            ;
                    } 
                    else 
                    {   //se nao funcionar nao faz nada
                        $('#id_conteudo2').html('<option value="">– Escolha Conteudo –</option>');
                    }
                });
            });

        </script>

    
        
        <script>
            M.AutoInit();
            M.toast({html: '<span><i class="small material-icons">error_outline</i> &nbsp;Verifique as instruções de postagem em "Passo a Passo"!'})
        </script>

        
	</body>
	
</html>




