
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
           
        <!--NAV BAR-->
        
        <header>
            <div class="navbar-fixed">
                <nav class="white">
                    <div class="nav-wrapper fixed container white">
                        <a href="#" class="brand-logo center"> <img class="responsive-img" src="img/AuroraLogo1.png"></a>
                        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons black-text">menu</i></a> 
                        <a href="#!" class="right"><i class="material-icons grey-text">notifications</i></a></li>		  
                    </div>
                </nav>
            </div>
		</header>
	
	    <ul id="slide-out" class="side-nav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="img/carrossel_5.png">
                    </div> 

                    <a href="#!user"><img class="circle" src="img/usericon.png"></a>
                    <a href="#!name"><span class="white-text"> <?php echo $_SESSION['User_Name']; ?> </span></a><br>
                    <a href="#"><span class="white-text email"><?php echo $_SESSION['Nome_Completo']; ?></span></a>
                    <a href="#"><span class="white-text">Ranking: <?php //$_SESSION['PosicaoRanking']; ?>º </span></a>
                </div>
            </li>

            <li><a href="home.php" class="waves-effect"><i class="material-icons">home</i>Início</a></li>
            <li><a href="#!" class="waves-effect"><i class="material-icons">collections_bookmark</i>Disciplinas</a></li>
            <li><a href="#!" class="waves-effect"><i class="material-icons">create</i>Exercícios</a></li>
            <li><a href="#!" class="waves-effect"><i class="material-icons">star</i>Favoritos</a></li>
            <li><a href="forum/forum-index.php" class="waves-effect"><i class="material-icons">question_answer</i>Fórum</a></li>
            <li><a href="#!" class="waves-effect"><i class="material-icons">
        account_box</i>Meu Perfil</a></li>
            <li><a href="index.php" class="waves-effect waves-light btn red">Sair</a></li>
        </ul>

        <!--Vinculando JavaScript no final da página para ganho de performance-->
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>
		 
            $(".button-collapse").sideNav();
            $('.button-collapse').sideNav('hide');
            $('.carousel.carousel-slider').carousel({fullWidth: true});
               
        </script>
          
      
    </body>
</html>  