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
            //inclui a nav
            include 'nav_home.php';
            //variaveis vinda da página anterior
            $tipo = $_GET['tipo'];
            $disc = $_GET['disc'];
            $cont = $_GET['cont'];
		?>
	
		<main>	
			<div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="row path_top">
                            <span><i class="small material-icons"><a class="black-text" href="forum-index.php">home</a></i> &nbsp; > <a href="categorias.php?disc=<?php echo $disc;?>"> <?php echo $disc; ?> </a> > <a href="conteudos.php?disc=<?php echo $disc;?>&tipo=<?php echo $tipo;?>"> <?php echo $tipo; ?> </a> > <a href="topicos.php?disc=<?php echo $disc;?>&tipo=<?php echo $tipo;?>&cont=<?php echo $cont;?>"> <?php echo $cont; ?> </a>  </span>
                        </div>                         
                    </div>
                </div>

                <div class="row">
                    <table class="striped bordered">
                        <thead>
                            <tr>
                                <th class=""> Discussão </th>
                                <th class="center-align"> Comentários </th>
                                <th class="center-align"> Visualizações </th>
                                <!--<th class="center-align"> Post Recente </th> -->
                            </tr>  
                        </thead>
                              
                        <?php
                            //Incluir a conexão com banco de dados
                            include_once '../DAL/Class_conexao_DAL.php';
                            $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3   
                            $sql = "SELECT PF.cod_pergunta, PF.titulo, PF.visualizacoes FROM TB_Temas AS T, TB_Perguntas_forum AS PF WHERE T.tema = '$cont' AND T.cod_tema = PF.conteudo  AND PF.categoria = '$tipo' ORDER BY titulo ASC";                                        // executa a query
                            $dados = mysqli_query($conexao, $sql);

                            $linha = mysqli_fetch_assoc($dados);

                            if (empty($linha)) {
                                echo '<tr> <p class="red-text"> Não há tópicos cadastrados para essa categoria no momento.';
                                unset($sql, $dados, $linha);
                            }

                            else{ 
                                
                                $sql = "SELECT PF.cod_pergunta, PF.titulo, PF.visualizacoes FROM TB_Temas AS T, TB_Perguntas_forum AS PF WHERE T.tema = '$cont' AND T.cod_tema = PF.conteudo  AND PF.categoria = '$tipo' ORDER BY titulo ASC";                                        // executa a query
                                $dados = mysqli_query($conexao, $sql);

                                 // transforma os dados em um array
                            while ($linha = mysqli_fetch_assoc($dados)) 
                            {
                                $pergunta = $linha["cod_pergunta"];
                           
                                echo '<tbody>
                                    <tr>
                                        <td> <a class="" href="exibir-discussao.php?disc='.$linha['cod_pergunta'].'&vis='.$linha['visualizacoes'].'"> &nbsp; '.$linha['titulo'].' </a></td>';
                                        //contador de comentários
                                        $sql = "SELECT COUNT(RF.cod_resposta) AS respostas FROM TB_Respostas_forum as RF, TB_Perguntas_forum as PF where RF.pergunta = '$pergunta' and RF.pergunta = PF.cod_pergunta";
                                        $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                                        // executa a query
                                        $dado = mysqli_query($conexao, $sql);
                                        // transforma os dados em um array
                                        $comentario = mysqli_fetch_assoc($dado);
                                        echo '<td  class="center-align"> <span> '.$comentario["respostas"].' <span> </td>  <!--NÚMERO DE COMENTÁRIOS PORTUGUÊS-->                                        
                                        <td  class="center-align"> <span> '.$linha['visualizacoes'].' <span> </td>  <!--NÚMERO DE VISUALIZAÇÕES-->
                                    </tr>
                                    </tbody>';
                            }

                            }
                           
                        ?>

                               
                    </table>
                </div>

                <div class="row center-align">
                    <div class="col s12">
                        <a href="novo-topico.php" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> create </i> Novo Tópico</a></li>
                    </div>
                </div>
            </div>
		
        </main>
        
		<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>

</html>




