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
            include '../DAL/Class_conexao_DAL.php';      
		?>
	
		<main>	
			<div class="container">
                <div class="row">
                    <div class="col s12">
                        <h5 class="user_forum"> Olá, <?php echo $_SESSION['User_Name']; ?> </h5>
                        <h6 class="user_forum"> Bem-vindo(a) ao Fórum Aurora! </h6>
                    </div>
                    <!-- <div class="input-field col s12">      
                        <input id="icon_prefix" type="text" class="validate" placeholder="Digite aqui para pesquisar...">
                    </div> -->
                </div>
                      

                <div class="row">
                    <table class="striped">
                        <thead>
                            <tr>
                                <th class=""> Categorias </th>
                                <th class="center-align"> Comentários </th>
                                <th class="center-align"> Discussões </th>
                            </tr> 
                            <tr>
                                <th> Disciplinas </th>
                            </tr> 
                        </thead>    
                        <tbody>
                            <?php include_once "../DAL/forum/Class_mostrar_diciplinas_FI_DAL.php"; ?>                                    
                        </tbody>
                    </table>
                    
                    <table class="striped">
                        <thead>
                            <tr>
                                <th> Geral </th> 
                            </tr> 
                        </thead>

                        <tbody>
                            <tr>
                                <td><i class="yellow-text material-icons"> lightbulb_outline </i> <a class="" href=""> Dicas </a> </td>
                                <!--<td  class="center-align"> <span> 0 <span> </td>  --NÚMERO DE COMENTÁRIOS dicas
                                <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS dicas
                                <td  class="center-align"> <span> 0 <span> </td>  <!--NÚMERO DE COMENTÁRIOS dicas-->
                            </tr>

                            <tr>
                                <td> <i class="pink-text material-icons"> chat  </i> <a class="" href=""> Off-Topic </a> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row center-align">
                    <div class="col s12">
                        <a href="novo-topico.php" class="btn_forum waves-effect waves-light btn orange darken-2"><i class="white-text material-icons"> create </i> Novo Tópico</a>
                    </div>
                </div>
            </div>	
        </main>

		<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		 
		<script>
            M.toast({html: '<span><i class="small material-icons">error_outline</i> &nbsp; Tire suas dúvidas aqui!</span>'})
        </script>
        
	</body>
	
</html>




