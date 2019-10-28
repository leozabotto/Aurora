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
                //inclui a nave
                include 'nav_home.php';
                //variavel vinda da página anterior
                $disc = $_GET['disc'];
                //inclui a conexao
                include_once '../DAL/Class_conexao_DAL.php';
                $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3    
			?>
	
			<main>	

				<section id="conteudo">

				    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <div class="row path_top">
                                <span><i class="small material-icons"><a class="black-text" href="forum-index.php">home</a></i> &nbsp; > <a href="categorias.php?disc=<?php echo $disc;?>"> <?php echo $disc; ?> </a></a> </span>
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
                                </thead>
                              
                                    
                                <tbody>
                                    <tr>
                                        <td> <a class="" href="conteudos.php?disc=<?php echo $disc; ?>&tipo=Dúvidas"> &nbsp; Dúvidas </a></td> 
                                        <?php
                                            //contador de comentários
                                            $sql = "SELECT COUNT(RF.cod_resposta) AS respostas FROM TB_Respostas_forum as RF, TB_Perguntas_forum as PF where PF.disciplina = (SELECT cod_materia from TB_Materias where Nome = '$disc') and RF.pergunta = PF.cod_pergunta and categoria = 'Dúvidas'";
                                            $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                                            // executa a query
                                            $dado = mysqli_query($conexao, $sql);
                                            // transforma os dados em um array
                                            $comentario = mysqli_fetch_assoc($dado);
                                            echo '<td  class="center-align"> <span> '.$comentario["respostas"].' <span> </td>  <!--NÚMERO DE COMENTÁRIOS -->';
                                            //contador de discussões
                                            $sql = "SELECT COUNT(cod_pergunta) AS topicos FROM TB_Perguntas_forum where disciplina = (SELECT cod_materia from TB_Materias where Nome = '$disc') and categoria = 'Dúvidas'";
                                            $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                                            // executa a query
                                            $dado = mysqli_query($conexao, $sql);
                                            // transforma os dados em um array
                                            $topico = mysqli_fetch_assoc($dado);
                                            echo '<td  class="center-align"> <span> '.$topico["topicos"].' <span> </td>  <!--NÚMERO DE DISCUSSÕES -->';
                                        ?>
                
                                    </tr>
                                
                                    <tr>
                                        <td> <a class="" href="conteudos.php?disc=<?php echo $disc; ?>&tipo=Lição de Casa"> &nbsp; Lição de Casa </a> </td>
                                        <?php
                                            //contador de comentários
                                            $sql = "SELECT COUNT(RF.cod_resposta) AS respostas FROM TB_Respostas_forum as RF, TB_Perguntas_forum as PF where disciplina = (SELECT cod_materia from TB_Materias where Nome = '$disc') and RF.pergunta = PF.cod_pergunta and categoria = 'Lição de Casa'";
                                            $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                                            // executa a query
                                            $dado = mysqli_query($conexao, $sql);
                                            // transforma os dados em um array
                                            $comentario = mysqli_fetch_assoc($dado);
                                            echo '<td  class="center-align"> <span> '.$comentario["respostas"].' <span> </td>  <!--NÚMERO DE COMENTÁRIOS -->';
                                            //contador de discussões
                                            $sql = "SELECT COUNT(cod_pergunta) AS topicos FROM TB_Perguntas_forum where disciplina = (SELECT cod_materia from TB_Materias where Nome = '$disc') and categoria = 'Lição de Casa'";
                                            $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                                            // executa a query
                                            $dado = mysqli_query($conexao, $sql);
                                            // transforma os dados em um array
                                            $topico = mysqli_fetch_assoc($dado);
                                            echo '<td  class="center-align"> <span> '.$topico["topicos"].' <span> </td>  <!--NÚMERO DE DISCUSSÕES -->';
                                        ?>
                                    </tr>                                   
                                </tbody>
                            <table>
                        </div>

                        <div class="row center-align">
                            <div class="col s12">
                                <a href="novo-topico.php" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> create </i> Novo Tópico</a></li>
                            </div>
                        </div>
                    </div>

				</section>
            </main>
        
	
		 
	
		 <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		 <script type="text/javascript" src="js/materialize.min.js"></script>
		 
	
	</body>
	
</html>




