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
                            <label for="enunq"> Enunciado da Questão </label>
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
                    <p class="red-text"> É importante que você tenha conhecimento de HTML e Materialize CSS para fazer suas postagens tanto de conteúdo quanto de questões. Se preferir, <a class="red-text" href="https://materializecss.com/"><u>clique aqui</u></a> para ir diretamente à documentação do Materialize CSS antes de começar. </p>
                    <p> Para fazer a adição de conteúdos na plataforma, siga os seguintes passos: </p>
                    <p> <b> 1º Preencha corretamente os seguintes campos: </b> </p>
                    <img class="responsive-img" src="img/inst/1.png"/>
                    <p> <b> 2º Baixe o arquivo modelo e escreva nele o seu código HTML: </b> </p>
                    <p> <a href="download/modelo_aurora.html" class="btn btn-small orange darken-2" download="modelo_aurora.html">Baixar Arquivo</a> </p>
                    <p> Para escrever, basta usar um editor de textos qualquer ou alguma IDE (recomenda-se o Visual Studio Code). </p>
                    <p> <b> 3º Abra a página para verificar se está de acordo com o desejado: </b> </p>
                    <div class="col s12">
                        <img class="responsive-img" src="img/inst/2.png"/>
                    </div>
                    <p> <b> 4º Caso tudo esteja certo, copie o código inteiro e cole no campo de conteúdo. Em seguida, clique em "Enviar":  </b> </p>
                    <img class="responsive-img" src="img/inst/3.png"/>
                    <p> <b> 5º Após o envio, você receberá o seguinte aviso:  </b> </p>
                    <div class="col s12">
                        <img class="responsive-img" src="img/inst/4.png"/>
                    </div>
                    <p> Pronto! Agora basta esperar o email de confirmação dos nossos administradores informando se o seu conteúdo foi aprovado. Caso esteja tudo certo, ele se tornará disponível para todos os alunos acessarem. </p>
                    <p> É importante manter uma <b> cópia de segurança do seu conteúdo</b>, pois caso ele seja recusado será necessário fazer as alterações descritas e enviá-lo para análise novamente!
                    <p> Mais instruções sobre com anexar imagens estão inclusas no arquivo modelo. </p>
                    <p><b> AVISO: </b> Certifique-se de inserir as referências bibliográficas no final da página conforme o arquivo modelo.</p>

                    <h5 class="mt-2"> <b> Adição de Questões </b> </h5>
                    <p> <b> 1º Selecione a Matéria, juntamente com o Conteúdo, Dificuldade e Alternativa correta. Posteriormente, escreva o enunciado da questão utilizando HTML5 (caso a questão possua imagem, utilize a tag img). </b> </p>
                    
                    <img class="responsive-img" src="img/inst/5.png"/>
                    <p> <b> 2º Insira as alternativas correspondentes. Caso não haja alternativa "E", deixe-a em branco. (Se existir imagem, utilize a tag citada no item 2): </b> </p>
                    <img class="responsive-img" src="img/inst/6.png"/>
                    <p> <b> 3º Preencha a resolução utilizando HTML5. Além disso, certifique-se de que tudo está preenchido e clique em "Enviar": </b> </p>
                    <img class="responsive-img" src="img/inst/7.png"/>
                    <p> <b> 4º Caso esteja tudo certo será exibida a seguinte mensagem: </b> </p>
                    <img class="responsive-img" src="img/inst/8.png"/>
                    <p> Pronto! Agora basta esperar o email de confirmação dos nossos administradores informando se o seu exercício foi aprovado. Caso esteja tudo certo, ele se tornará disponível para todos os alunos acessarem.</p>

                    <p> Novamente, não se esqueça de manter uma <b> cópia de segurança do seu conteúdo </b>, pois caso ele seja recusado será necessário fazer as alterações descritas e enviá-lo para análise novamente! </p>

                    <p><b> AVISO: </b> Caso o exerício não seja de sua autoria, informe sua origem no início do enunciado como na imagem a seguir:</p>
                    <img class="responsive-img" src="img/inst/9.png"/>
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
                                </tr> 
                            </thead>                            
                            <tbody>';
                                $sql = "SELECT C.cod_conteudo, C.titulo, T.tema, U.usernick, M.Nome FROM tb_conteudo AS C, tb_materias AS M, tb_usuario AS U, tb_temas AS T, tb_pessoa AS P WHERE P.cod_pessoa = U.pessoa AND P.cod_pessoa = C.pessoa AND T.cod_tema = C.tema AND M.cod_materia = T.materia AND estado = 'Em analise'";
                                $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                                // executa a query
                                $dados = mysqli_query($conexao, $sql);
                                // transforma os dados em um array
                                $linha = mysqli_fetch_assoc($dados);
                                $total = mysqli_num_rows($dados);                           
                                if($total != 0)
                                {   
                                    do
                                    {
                                        echo'<tr>
                                            <td> <a class="" href="exibir.php?cont='.$linha['cod_conteudo'].'">'.$linha['titulo'].'</a> </td>
                                            <td> '.$linha['Nome'].'</td>
                                            <td> '.$linha['tema'].'</td>
                                            <td> '.$linha['usernick'].' </td>
                                            <tr>';
                                    }while($linha = mysqli_fetch_assoc($dados));   
                                }             
                                else 
                                {
                                    echo' <tr><td colspan = "4" class="center-align"> Nenhuma solicitação pendente <td> <tr>';
                                }                             
                        echo '</tbody>
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
                                </tr> 
                            </thead>
                            <tbody>';
                                $sql = "SELECT Q.cod_pergunta, T.tema, U.usernick, M.Nome FROM tb_questoes AS Q, tb_materias AS M, tb_usuario AS U, tb_temas AS T, tb_pessoa AS P WHERE P.cod_pessoa = U.pessoa AND P.cod_pessoa = Q.pessoa AND T.cod_tema = Q.tema AND M.cod_materia = T.materia AND Q.estado = 'Em analise' ORDER BY Q.cod_pergunta ASC";
                                $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                                // executa a query
                                $dados = mysqli_query($conexao, $sql);
                                // transforma os dados em um array
                                $linha = mysqli_fetch_assoc($dados);
                                $total = mysqli_num_rows($dados);                           
                                if($total != 0)
                                {   
                                    do
                                    {
                                        echo'<tr> 
                                            <td> <a class="" href="exibir_exercicio.php?id='.$linha['cod_pergunta'].'">'.$linha['cod_pergunta'].'</a> </td>
                                            <td> '.$linha['Nome'].'</td>
                                            <td> '.$linha['tema'].'</td>
                                            <td> '.$linha['usernick'].' </td>                                        
                                            <tr>';
                                    }while($linha = mysqli_fetch_assoc($dados));             
                                }             
                                else 
                                {
                                    echo' <tr><td colspan = "4" class="center-align"> Nenhuma solicitação pendente <td> <tr>';
                                }                   
                            echo '</tbody>                               
                        </table>
                    </div>
                </div> 

                <div class="row mt-2">
                    <div class="col s12 m12"> 
                        <h5>Aprovação de Tutoria</h5>       
                        <ul id="#" class="tabs grey lighten-5 mt-2">
                            <li class="tab col s3"><a class="active" href="#solic">Solicitações</a></li>
                            <li class="tab col s3"><a href="#tut">Atuais Tutores</a></li>
                            <li class="tab col s4"><a href="#adm">Atuais Administradores</a></li>
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
                            <tbody>';
                            $sql = "SELECT P.cod_pessoa, P.Nome, U.email, U.usernick FROM tb_pessoa AS P, tb_usuario AS U WHERE U.pessoa = P.cod_pessoa AND P.tipo = 'Solicitado'";
                            $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                            // executa a query
                            $dados = mysqli_query($conexao, $sql);
                            // transforma os dados em um array
                            $linha = mysqli_fetch_assoc($dados);
                            //conta os dados
                            $total = mysqli_num_rows($dados);                           
                            if($total != 0)
                            {         
                                do
                                {
                                    echo'<tr> 
                                        <td> '.$linha['Nome'].' </td>
                                        <td> '.$linha['email'].'</td>
                                        <td> '.$linha['usernick'].' </td>
                                        <td> <a class="btn waves-effect waves-light green darken-2" href="DAL/Gerir/Class_aprovacoes_DAL.php?id='.$linha['cod_pessoa'].'&acao=aprovar&tipo=usuario"> V </a> <a class="btn waves-effect waves-light red darken-2" href="DAL/Gerir/Class_aprovacoes_DAL.php?id='.$linha['cod_pessoa'].'&acao=recusar&tipo=usuario"> X </a> </td>
                                        <tr>';
                                }while($linha = mysqli_fetch_assoc($dados));
                            }             
                            else 
                            {
                                echo' <tr><td colspan = "4" class="center-align"> Nenhuma solicitação pendente <td> <tr>';
                            }         
                           echo' </tbody>
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
                            <tbody>';
                            $sql = "SELECT P.cod_pessoa, P.Nome, U.email, U.usernick FROM tb_pessoa AS P, tb_usuario AS U WHERE U.pessoa = P.cod_pessoa AND P.tipo = 'Tutor'";
                            $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                            // executa a query
                            $dados = mysqli_query($conexao, $sql);
                            // transforma os dados em um array
                            $linha = mysqli_fetch_assoc($dados);
                            //conta os dados
                            $total = mysqli_num_rows($dados);                           
                            if($total != 0)
                            {                           
                                do
                                {
                                    echo'<tr>
                                        <td> '.$linha['Nome'].' </td>
                                        <td> '.$linha['email'].'</td>
                                        <td> '.$linha['usernick'].' </td>
                                        <td> <a class="btn waves-effect waves-light red darken-2" href="DAL/Gerir/Class_aprovacoes_DAL.php?id='.$linha['cod_pessoa'].'&acao=recusar&tipo=usuario"> X </a> </td>
                                        <tr>';
                                }while($linha = mysqli_fetch_assoc($dados)); 
                            }             
                            else 
                            {
                                echo' <tr><td colspan = "4" class="center-align"> Nenhuma solicitação pendente <td> <tr>';
                            }         
                            echo '</tbody>
                        </table>
                    </div>
                </div>


                <div id="adm">
                    <div class="row">
                        <table class="striped center-align responsive-table">
                            <thead>
                                <tr>
                                    <th class=""> Nome </th>
                                    <th class=""> Email </th>
                                    <th class=""> Nome de Usuário </th>                                    
                                </tr> 
                            </thead>
                            <tbody>';
                            $sql = "SELECT P.cod_pessoa, P.Nome, U.email, U.usernick FROM tb_pessoa AS P, tb_usuario AS U WHERE U.pessoa = P.cod_pessoa AND P.tipo = 'ADM'";
                            $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                            // executa a query
                            $dados = mysqli_query($conexao, $sql);
                            // transforma os dados em um array
                            $linha = mysqli_fetch_assoc($dados);
                            //conta os dados
                            $total = mysqli_num_rows($dados);                           
                            if($total != 0)
                            {                           
                                do
                                {
                                    echo'<tr>
                                        <td> '.$linha['Nome'].' </td>
                                        <td> '.$linha['email'].'</td>
                                        <td> '.$linha['usernick'].' </td>
                                        <tr>';
                                }while($linha = mysqli_fetch_assoc($dados)); 
                            }             
                            else 
                            {
                                echo' <tr><td colspan = "4" class="center-align"> Nenhuma solicitação pendente <td> <tr>';
                            }         
                            echo '</tbody>
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




