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
            $disc = $_GET['disc'];      
		?>
	
		<main>	
			<div class="container">

                <div class="row">
                    <div class="col s12">
                        <h5 class="user_forum"> Olá, <?php echo $_SESSION['User_Name']; ?> </h5>
                        <h6> Exibindo conteúdos de <?php echo $disc; ?> </h6>
                        </div>
                </div>
                      

                <div class="row">
                    <table class="striped">
                        <thead>
                            <tr>
                                <th class=""> Conteúdos </th>
                            </tr> 
                        
                        </thead>    
                        <tbody>

                            <?php
                            //Incluir a conexão com banco de dados
                            $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3    
                            $sql = "SELECT C.cod_conteudo, C.tema FROM TB_conteudos AS C, TB_materias AS D WHERE D.Nome = '$disc' AND C.materia = D.cod_materia";
                                // executa a query
                            $dados = mysqli_query($conexao, $sql);
                                // transforma os dados em um array

                            while ($linha = mysqli_fetch_assoc($dados) ) 
                            {
                                echo '<tr>
                                        <tr><td> <a class="" href="disciplinas-cont-list.php?cont='.$linha['tema'].'"> '.$linha['tema'].' </a> </td> </tr>                                            
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




