<!DOCTYPE html>
<html>
    <head>
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
	
	<body class="grey lighten-3">

			<?php	
				include 'nav_home.php';
		    ?>
	
			<main>
                <div class="container">
                    <div class="row center-align mt-5">
                        <div class="col s12 m4">
                            <div class="card medium">
                                <div class="card-content">
                                    <div class="card-title">
                                        <span class="card-title"> 
                                            <div class="row">
                                                <img class="responsive-img col s8 offset-s2 circle user-img preview-img" id="img_perfil" src="<?php if(!empty($_SESSION['UserImg'])){echo "uploads/img_Uperf/".$_SESSION['UserImg'];}else{echo "img/usericon.png";}?>"/>
                                            </div>    
                                            <h5><strong> Olá,  <?php echo $_SESSION['User_Name']?> ! </strong></h5>  
                                                
                                        </span>
                                    </div>  
                                </div>
                                <div class="card-action">
                                    <a href="sair.php" class="waves-effect waves-light btn red">Sair</a>
                                </div>
                            </div>
                        </div>
                     
                        <div class="col s12 m8">
                            <div class="card medium">
                                <div class="card-content">
                                    <div class="card-title">
                                        <span class="card-title">                                                         
                                            <h5> Acesso Rápido </h5>  
                                        </span>
                                    </div>

                                    <div class="col s12 m12">
                                        <div class="col s12 m4"> 
                                            <div class="card hoverable">
                                                <div class="card-image">
                                                    <a href="disciplinas.php"><img class="responsive-img" src="uploads/img_AcessoRp/1.png"></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m4"> 
                                            <div class="card hoverable">
                                                <div class="card-image">
                                                    <a href="exercicios.php"><img class="responsive-img" src="uploads/img_AcessoRp/2.png"></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m4"> 
                                            <div class="card hoverable">
                                                <div class="card-image">
                                                    <a href="forum/forum-index.php"><img class="responsive-img" src="uploads/img_AcessoRp/3.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12 m12">
                                        <div class="progress">
                                            <div class="determinate" style="width: 100%"></div>
                                        </div>

                                    <div class="card-title mt-2">
                                        <span class="card-title">                                                         
                                            <h5> <i class="yellow-text material-icons"> lightbulb_outline </i> Dica </h5>  
                                        </span>
                                    </div>

                                    <div class="card-content">
                                        <h6> Clique no ícone <i class="material-icons black-text">menu</i> ou selecione algum item do acesso rápido para começar.</h6>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   

                        <!--
                        <div class="col s12 m8">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-title">
                                        <span class="card-title"> 
                                            
                                        </span>
                                    </div>

                                    <div class=row>
                                        <div class="col s12 m12">
                                            <div class="col s12 m4"> 
                                                <div class="card hoverable">
                                                    <div class="card-image">
                                                         <img class="responsive-img" src="uploads/img_AcessoRp/1.png">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col s12 m4"> 
                                                <div class="card hoverable">
                                                    <div class="card-image">
                                                         <img class="responsive-img" src="uploads/img_AcessoRp/2.png">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col s12 m4"> 
                                                <div class="card hoverable">
                                                    <div class="card-image">
                                                         <img class="responsive-img" src="uploads/img_AcessoRp/3.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                
                                </div>

                            </div>
                        </div> -->
                    </div>
                </div>
			
               
                     <!--<div class="col s8 offset-s2 m2 mt-2 offset-m2">  IMAGEM DO USUÁRIO 
                        
                    </div>
                   div class="col s12 m8">
                        <h5> </h5>
                        <table class="highlight">
                            <thead class="centered">
                                <tr>
                                    <th> Nome </th> 
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $_SESSION['Nome_Completo']?>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th> E-mail </th>
                                    <th></th>
                                </tr>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $_SESSION['Email']?>
                                    </td>
                                </tr>
                            </tbody> -->
                           
        
                       
                            
                            
                        </table>

                    </div>
                <div>
				
			</main>
		 
		
	
	</body>
	
</html>




