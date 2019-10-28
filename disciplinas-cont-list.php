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
            include 'nav_home.php';          
            include 'DAL/Class_conexao_DAL.php';
            $cont = $_GET['tema'];            
		?>
	
		<main>	
			<div class="container">
                <div class="row">
                    <div class="col s12">
                        <h5 class="user_forum"> Olá, <?php echo $_SESSION['User_Name']; ?> </h5>
                        <h6> Exibindo conteúdos de <?php echo $cont; ?> </h6>
                    </div>
                </div>
                      

                <div class="row">
                    <table class="striped">
                        <thead>
                            <tr>
                                <th class=""> Sub-conteúdos </th>
                            </tr> 
     
                        </thead>    
                        <tbody>
                           
                        <?php
                            //Incluir a conexão com banco de dados
                            $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3    
                            $sql = "SELECT C.cod_conteudo, C.titulo FROM TB_Conteudo AS C, TB_Temas AS T WHERE T.Tema = '$cont' AND C.tema = T.cod_Tema and C.estado = 'Aprovado'";
                            // executa a query
                            $dados = mysqli_query($conexao, $sql);
                            // transforma os dados em um array
                            while ($linha = mysqli_fetch_assoc($dados) ) 
                            {
                                //mostra os conteudos adicionados pelos tutores
                                echo '<tr>
                                        <tr><td> <a class="" href="exibir.php?cont='.$linha['cod_conteudo'].'"> '.$linha['titulo'].' </a> </td> </tr>                                            
                                        </tr>';
                            }                                    
                        ?>

                        </tbody>
                    </table>
                    
                </div>

                <div class="row center-align">
                    <div class="col s12">
                    <?php
                        if ($_SESSION['Categoria'] == "Tutor")
                        {
                            echo '<a href="gerir.php" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> create </i> ADICIONAR CONTEÚDO </a>';
                        }
                        else{
                            
                        }
                    ?>
                    </div>
                </div>
            </div>	
        </main>

		<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		 
		<script>
            M.toast({html: '<span><i class="small material-icons">error_outline</i> &nbsp; Escolha o conteúdo que deseja estudar!</span>'})
        </script>
        
	</body>
	
</html>




