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
        <title> Aurora </title>
		
    </head>
	
	<body>

			<?php	
                include 'nav_home.php';
                $tipo = $_GET['tipo'];
                $disc = $_GET['disc'];
                $cont = $_GET['cont'];
			?>
	
			<main>	

				<section id="conteudo">

				    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <div class="row path_top">
                                    <span><i class="small material-icons"><a class="black-text" href="forum-index.php">home</a></i> &nbsp; > <a href="categorias.php?disc=<?php echo $disc;?>"> <?php echo $disc; ?> </a> > <a href="conteudos.php?disc=<?php echo $disc;?>&tipo=<?php echo $tipo;?>"> <?php echo $tipo; ?> </a> > <a href="topicos.php?disc=<?php echo $disc;?>&tipo=<?php echo $tipo;?>&cont=<?php echo $cont;?>"> <?php echo $cont; ?> </a>  </span>
                                </div>
                           
                                <div class="input-field col s12">
                                    <!--<i class="material-icons prefix">search</i>-->
                                    <input id="icon_prefix" type="text" class="validate" placeholder="Digite aqui para pesquisar...">
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

                                        $sql = "SELECT PF.cod_pergunta, PF.titulo FROM TB_conteudos AS C, TB_Perguntas_forum AS PF WHERE C.tema = '$cont' AND C.cod_conteudo = PF.conteudo  AND PF.categoria = '$tipo'";                                        // executa a query
                                        $dados = mysqli_query($conexao, $sql);
                                        // transforma os dados em um array

                                        while ($linha = mysqli_fetch_assoc($dados) ) 
                                        {
                                            echo '<tbody>
                                                <tr>
                                                    <td> <a class="" href=""> &nbsp; '.$linha['titulo'].' </a></td> 
                                                    <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS-->
                                                    <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE VISUALIZAÇÕES-->
                            
                                                </tr>
                                            </tbody>';
                                        }
                                ?>

                               
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




