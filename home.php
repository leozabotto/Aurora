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

			
                <div class="row center-align mt-2">
                    <div class="col s12">
                        <h5> Bem-vindo ao Aurora! </h5>
                    <div class="col s8 offset-s2 m2 mt-2 offset-m2"> <!-- IMAGEM DO USUÁRIO -->
                        <img class="responsive-img circle user-img preview-img" id="img_perfil" src="<?php if(!empty($_SESSION['UserImg'])){echo "uploads/img_Uperf/".$_SESSION['UserImg'];}else{echo "img/usericon.png";}?>"/>
                    </div>
                    <div class="col s12 m8">
                        <h5> <?php echo $_SESSION['User_Name']?> </h5>
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
                            </tbody>
                           
        
                       
                            
                            
                        </table>

                    </div>
                <div>
				
			</main>
		 
		
	
	</body>
	
</html>




