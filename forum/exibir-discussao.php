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

            //Incluir a conexão com banco de dados
            include_once '../DAL/Class_conexao_DAL.php';     
            $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3    
            //contar as vizualizações do topico
            $disc = $_GET['disc'];
            if(isset($_GET['vis']))
            {
                $vis = intval($_GET['vis']);               
                $vis = $vis + 1;    
                //alterar quantidade de visualizações no banco
                $sql = "UPDATE TB_Perguntas_forum SET visualizacoes = '$vis' WHERE cod_pergunta = '$disc'";
                $resultado = Func_executeupdate_DAL($sql);
            }
            //buscar informaçoes do topico no banco          
            $sql = "SELECT PF.titulo, PF.pergunta, PF.cod_pergunta, PF.datap, U.usernick, P.tipo, P.foto FROM TB_Perguntas_forum AS PF, TB_Usuario AS U, TB_Pessoa AS P WHERE U.cod_user = PF.usuario && P.cod_pessoa = U.pessoa && PF.cod_pergunta = '$disc' ";                                        // executa a query
            $dados = mysqli_query($conexao, $sql);
            //transforma os dados em um array
            $linha = mysqli_fetch_assoc($dados);

            $_SESSION['pergunta'] = $linha['pergunta'];
            $_SESSION['cod_pergunta'] = $linha['cod_pergunta'];
		?>
	
		<main>	
		    <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="row path_top">
                            <span><i class="small material-icons"><a class="black-text" href="forum-index.php">home</a></i> &nbsp; > <?php echo $linha['titulo']; ?>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <table>
                        <thead>
                            <tr>
                                <th class=""> <?php echo $linha['titulo']; ?> </th>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="container">
            <!-- pergunta -->
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="row mt-2 pl-2">
                                <div class="col s4 m2">
                                    <img src="<?php echo "../uploads/img_Uperf/".$linha['foto'];?>" class="responsive-img"> <!--Imagem do Usuário da pergunta-->
                                </div>
                                <div class="col s6">
                                    <div class="row mt-5">
                                        <!-- mostrar as informações de quem fez a pergunta -->
                                        <h5><?php echo $linha['usernick']; ?> </h5>
                                        <h6><?php echo $linha['datap']; ?> &nbsp </h6> <a href="modal-edit.php?idr=nulo&texto=<?php echo$linha['pergunta']?>&idp=<?php echo $disc; ?>" class="modal-trigger">Editar</a>
                                        <h6><?php echo $linha['tipo']; ?>  </h6> <!--Se é aluno ou tutor-->
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col s12">
                                    <div class="col s12">
                                        <!-- mostrar a pergunta -->
                                        <p><?php echo $linha['pergunta']; ?> 

                                    </div>
                                </div>
                            </div>   
                        </div> 
                    </div>
                </div>
                <!-- respostas  -->
                <?php
                    $sql = "SELECT RF.resposta, RF.verificada, RF.datap, U.usernick, P.tipo, P.foto, RF.cod_resposta FROM TB_Respostas_forum AS RF, TB_Perguntas_forum AS PF, TB_Usuario AS U, TB_Pessoa AS P WHERE RF.pergunta = PF.cod_pergunta && P.cod_pessoa = U.pessoa && U.cod_user = RF.usuario && PF.cod_pergunta = '$disc'  order by RF.cod_resposta  ASC ";                                        
                    // executa a query
                    $dados = mysqli_query($conexao, $sql);
                    // transforma os dados em um array e mostra
                    while ($linha = mysqli_fetch_assoc($dados) ) 
                    {
                        echo 
                            '<div class="row">
                            <div class="col s12">';
                            //testa se a resposta e verificada por algum tutor
                            if($linha['verificada'] == 0) 
                            {
                                // se não for válida fica branca
                                echo'<div class="card"><div class="row mt-2 pl-2">
                                <div class="col s4 m2">
                                    <img src="../uploads/img_Uperf/'.$linha['foto'].'" class="responsive-img"> <!--Imagem do Usuário da pergunta-->
                                </div>
                                <div class="col s6">
                                    <div class="row mt-5">
                                        <h5>'.$linha['usernick'].'</h5>
                                        <h6>'.$linha['datap'].'&nbsp <h6> <a href="modal-edit.php?idr='.$linha['cod_resposta'].'&texto='.$linha['resposta'].'&idp='.$disc.'" class="modal-trigger">Editar</a> | <a href="../DAL/Forum/Class_verificar_DAL.php?id='.$linha['cod_resposta'].'" class="">Verificar</a> ';
                            }
                            else
                            {
                                // se for válida fica verde
                                echo'<div class="card green lighten-4"><div class="row mt-2 pl-2">
                                <div class="col s4 m2">
                                    <img src="../uploads/img_Uperf/'.$linha['foto'].'" class="responsive-img"> <!--Imagem do Usuário da pergunta-->
                                </div>
                                <div class="col s6">
                                    <div class="row mt-5">
                                        <h5>'.$linha['usernick'].'</h5>
                                        <h6>'.$linha['datap'].'&nbsp <h6>  ';
                            }
                            //resto da resposta
                            echo'
                                        <h6>'.$linha['tipo'].' </h6> <!--Se é aluno ou tutor-->
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col s12">
                                        <div class="col s12">

                                            <p>'.$linha['resposta'].' 

                                        </div>
                                    </div>
                                </div>   
                                </div> 
                                </div>
                                </div>';
                        
                    }
                ?>
                <!-- Área para responder o topico -->
                <div class="row">
                    <form class="" id="form_criar" method ="POST" action="../DAL/Forum/Class_resposta_DAL.php?disc=<?php echo $disc;?>">
                        <div class="col s12">

                            <textarea id="txt_resp" name="resposta" class="materialize-textarea" placeholder="Digite sua resposta aqui..." rows=20></textarea>
                                                    
                        </div>

                        <div class="col s12 m12">
                            <div class="input-field col s12 m12 center-align">
                                <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action" id="btnEnviar">Enviar</button> <!--Botão para Postar--> 
                            </div>
                        </div>   
                    </form>                   
                </div>
            </div>
				
        </main>

         <!--Vinculando JavaScript no final da página para ganho de performance-->
         <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script> 
           
            M.AutoInit();
       
       
       </script>     

	</body>
	
</html>




