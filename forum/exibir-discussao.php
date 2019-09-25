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
            $disc = $_GET['disc'];
            //Incluir a conexão com banco de dados
            include_once '../DAL/Class_conexao_DAL.php';

            $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3    

            $sql = "SELECT PF.titulo, PF.pergunta, PF.datap, U.usernick, P.tipo FROM TB_Perguntas_forum AS PF, TB_Usuario AS U, TB_Pessoa AS P WHERE U.cod_user = PF.usuario && P.cod_pessoa = U.pessoa && PF.cod_pergunta = '$disc' ";                                        // executa a query
            $dados = mysqli_query($conexao, $sql);
            // transforma os dados em um array
            $linha = mysqli_fetch_assoc($dados);
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
                                    <img src="<?php if(!empty($_SESSION['UserImg'])){echo "../uploads/img_Uperf/".$_SESSION['UserImg'];}else{echo "../img/usericon.png";}?>" class="responsive-img"> <!--Imagem do Usuário da pergunta-->
                                </div>
                                <div class="col s6">
                                    <div class="row mt-5">
                                        <h5><?php echo $linha['usernick']; ?> </h5>
                                        <h6><?php echo $linha['datap']; ?> &nbsp </h6> <a href="" class="">Editar</a> | <a href="" class="">Verificar</a> 
                                        <h6><?php echo $linha['tipo']; ?>  </h6> <!--Se é aluno ou tutor-->
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col s12">
                                    <div class="col s12">

                                        <p><?php echo $linha['pergunta']; ?> 

                                    </div>
                                </div>
                            </div>   
                        </div> 
                    </div>
                </div>
                <!-- respostas  -->
                <?php
                    $sql = "SELECT RF.resposta, RF.verificada, RF.datap, U.usernick, P.tipo, P.foto, RF.cod_resposta FROM TB_Respostas_forum AS RF, TB_Perguntas_forum AS PF, TB_Usuario AS U, TB_Pessoa AS P WHERE RF.pergunta = PF.cod_pergunta && P.cod_pessoa = U.pessoa && U.cod_user = RF.usuario && PF.cod_pergunta = '$disc'";                                        // executa a query
                    $dados = mysqli_query($conexao, $sql);
                    // transforma os dados em um array

                    while ($linha = mysqli_fetch_assoc($dados) ) 
                    {
                        echo 
                            '<div class="row">
                            <div class="col s12">';
                            if($linha['verificada'] == 0) 
                            {
                                echo'<div class="card">';
                            }
                            else
                            {
                                echo'<div class="card green lighten-4">';
                            }
                        if(!empty($linha['foto'])){
                            echo'<div class="row mt-2 pl-2">
                                    <div class="col s4 m2">
                                        <img src="../uploads/img_Uperf/'.$linha['foto'].'" class="responsive-img"> <!--Imagem do Usuário da pergunta-->
                                    </div>
                                    <div class="col s6">
                                        <div class="row mt-5">
                                            <h5>'.$linha['usernick'].'</h5>
                                            <h6>'.$linha['datap'].'&nbsp <h6> <a href="" class="">Editar</a> | <a href="" class="">Verificar</a> 
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
                        else{
                            echo'<div class="row mt-2 pl-2">
                                    <div class="col s4 m2">
                                        <img src="../img/usericon.png" class="responsive-img"> <!--Imagem do Usuário da pergunta-->
                                    </div>
                                    <div class="col s6">
                                        <div class="row mt-5">
                                            <h5>'.$linha['usernick'].'</h5>
                                            <h6>'.$linha['datap'].'&nbsp <h6> <a href="" class="">Editar</a> | <a href="" class="">Verificar</a> 
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
                    }
                ?>

                <div class="row">
                    <form method ="POST" action="../DAL/Forum/Class_resposta_DAL.php?disc=<?php echo $disc;?>">
                        <div class="col s12">

                            <textarea id="#" name="resposta" class="materialize-textarea" placeholder="Digite sua resposta aqui..." rows=20></textarea>

                        </div> 
                                
                        <div class="col s12 m12">
                            <div class="input-field col s12 m12 center-align">
                                <button class="btn waves-effect waves-light orange darken-2" type="submit" name="action" onclick="">Enviar</button> <!--Botão para Postar--> 
                            </div>
                        </div>   
                    </form> 
                </div>

            </div>
				
        </main>

	</body>
	
</html>




