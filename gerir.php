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
	
	<body class="grey lighten-5">
		<?php	
            include 'nav_home.php';   
            include_once "DAL/Class_conexao_DAL.php";                
		?>

		<main>	
		    <div class="container">
                <div class="row mt-2">
                    <div class="col s12 m12 center-align"> 
                        <h5>Gerenciar Plataforma</h5>
                    </div> 
                </div>
                <div class="row mt-2">
                    <div class="col s12">
                        <ul id="#" class="tabs grey lighten-5">
                            <li class="tab col s3"><a class="active" href="#cont">Adicionar Conteúdo</a></li>
                            <li class="tab col s3"><a href="#quest">Adicionar Questões</a></li>
                            <li class="tab col s3"><a href="#inst">Instruções</a></li>  
                        </ul>
                    </div>  
                </div>

                <div id="cont" class="row"> <!--Adicionar Conteúdo-->

                    <form name="cad_conteudo" action="Class_cad_conteudo_DAL.php" method="POST">
                        <div class="input-field col s12 m3 l3">
                            <select id="#" name="disciplina" required> <!--Campo da Disciplina--> 
                                <optgroup label="Selecione:">      
                                    <!-- pega as matérias no banco e coloca na caixa de seleção -->
                                    <?php include "DAL/Forum/Class_disciplina_DAL.php"; ?>
                                </optgroup>     
                            </select>  
                            <label>Disciplina</label>              
                        </div>  
                        <div class="input-field col s12 m3 l3">
                            <select id="#" name="#" required> <!--Campo do Conteúdo [busca no banco o conteúdo das disciplinas // usar mesma lógica do novo-topico--> 
                                <optgroup label="Selecione:">      
                                    <option value="#">Conteúdo 1</option>
                                    <option value="#">Conteúdo 2</option>
                                    <option value="#">Conteúdo 3</option>
                                </optgroup>     
                            </select>  
                            <label>Conteúdo</label>              
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input id="titulo-topico" type="text" name="titulo-topico" class="validate" required>
                            <label for="titulo-topico"> Título do Conteúdo </label> <!--Campo do título da discussão-->
                        </div> 
                        <div class="input-field col s12 m12 l12">
                            <textarea id="conteudo" name="conteudo" class="materialize-textarea"></textarea>
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

                    <form name="" action="" method="">
                        <div class="input-field col s12 m3 l3">
                            <select id="#" name="#" required> <!--Campo da Disciplina--> 
                                <!-- pega as matérias no banco e coloca na caixa de seleção -->
                                <?php include "DAL/Forum/Class_disciplina_DAL.php"; ?>
                            </select>  
                            <label>Disciplina</label>              
                        </div>  
                        <div class="input-field col s12 m3 l3">
                            <select id="#" name="#" required> <!--Campo do Conteúdo [busca no banco o conteúdo das disciplinas // usar mesma lógica do novo-topico--> 
                                <optgroup label="Selecione:">      
                                    <option value="#">Conteúdo 1</option>
                                    <option value="#">Conteúdo 2</option>
                                    <option value="#">Conteúdo 3</option>
                                </optgroup>     
                            </select>  
                            <label>Conteúdo</label>              
                        </div>      
                        <div class="input-field col s12 m3 l3">
                            <select id="#" name="#" required> <!--Campo da dificuldade--> 
                                <optgroup label="Selecione:">        
                                    <option value="#">Fácil</option>
                                    <option value="#">Média</option>
                                    <option value="#">Difícil</option>
                                </optgroup>     
                            </select>  
                            <label>Dificuldade</label>              
                        </div> 
                        <div class="input-field col s12 m3 l3">
                            <select id="#" name="#" required> <!--Campo da dificuldade--> 
                                <optgroup label="Selecione:">        
                                    <option value="#">A</option>
                                    <option value="#">B</option>
                                    <option value="#">C</option>
                                    <option value="#">D</option>
                                    <option value="#">E</option>
                                </optgroup>     
                            </select>  
                            <label>Alternativa Correta</label>              
                        </div> 
                        <div class="input-field col s12 m12 l12">
                            <textarea id="conteudo" name="conteudo" class="materialize-textarea"></textarea>
                            <label> Enunciado da Questão </label>
                            <span class="helper-text">Digite seu conteúdo na forma de HTML. Você pode usar Materialize CSS na postagem. </span>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input id="alt-a" type="text" name="#" required>
                            <label for="alt-a"> Alternativa A </label> <!--Campo de alternativa-->
                            <span class="helper-text">Digite apenas a resposta, não inclua a letra da alternativa. </span>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input id="alt-b" type="text" name="#" required>
                            <label for="alt-b"> Alternativa B </label> <!--Campo de alternativa-->
                            <span class="helper-text">Digite apenas a resposta, não inclua a letra da alternativa. </span>
                        </div>  
                        <div class="input-field col s12 m12 l12">
                            <input id="alt-c" type="text" name="#" required>
                            <label for="alt-c"> Alternativa C </label> <!--Campo de alternativa-->
                            <span class="helper-text">Digite apenas a resposta, não inclua a letra da alternativa. </span>
                        </div>  
                        <div class="input-field col s12 m12 l12">
                            <input id="alt-d" type="text" name="#" required>
                            <label for="alt-d"> Alternativa D </label> <!--Campo de alternativa-->
                            <span class="helper-text">Digite apenas a resposta, não inclua a letra da alternativa. </span>
                        </div>  
                        <div class="input-field col s12 m12 l12">
                            <input id="alt-e" type="text" name="#">
                            <label for="alt-e"> Alternativa E </label> <!--Campo de alternativa-->
                            <span class="helper-text">Digite apenas a resposta, não inclua a letra da alternativa. </span>
                        </div>    
                        <div class="input-field col s12 m12 l12">
                            <textarea id="conteudo" name="conteudo" class="materialize-textarea"></textarea>
                            <label> Resolução </label>
                            <span class="helper-text">Digite seu conteúdo na forma de HTML. Você pode usar Materialize CSS na postagem. </span>
                        </div>
                        <div class="col s12 m12">
                            <div class="input-field col s12 m12 center-align">
                                <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action" onclick="">Enviar</button> <!--Botão para Postar--> 
                            </div>
                        </div>
                    </form>
                </div>

                <div id="inst">
               
                </div>                                 
                                               
            </div>
		
        </main>
    
		
        <script type="text/javascript" charset="UTF-8">

      
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        
        <script>
            M.AutoInit();
        </script>

        <script>
            M.toast({html: '<span><i class="small material-icons">error_outline</i> &nbsp;Verifique as instruções de postagem!'})
        </script>
	
	</body>
	
</html>




