<?php 
    session_start();
    if(!isset($_SESSION['pessoa']) && !isset($_SESSION['User_Name']) && !isset($_SESSION['Nome_Completo']))
    {
        header("location: ../login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Aurora </title>
        <meta charset="utf-8">
        <!--Importando Ícone da Google Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Importando materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Importando CSS Personalizado-->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--"Mostrando" ao navegador que a página é optimizada para dispostivos mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav({
                    inDuration: "300",
                    outDuration: "300",
                    preventScrolling: false,
                });
            }); 
        </script>
    </head>
    <body>
        <header>
            <div class="navbar-fixed">
                <nav class="white">
                    <div class="nav-wrapper fixed container white">
                        <a href="../home.php" class="brand-logo center"> <img class="responsive-img" src="img/AuroraLogo1.png"></a>
                        <a href="#" data-target="slide-out" class="sidenav-trigger btn btn-flat show-on-large white"><i class="material-icons black-text">menu</i></a> 
                        <!-- <a href="#!" class="right"><i class="material-icons grey-text">notifications</i></a></li>	-->	  
                    </div>
                </nav>
            </div>
		</header>
	    <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="img/carrossel_5.png">
                    </div> 
                    <a href="#!user"><img class="circle" src="<?php if(!empty($_SESSION['UserImg'])){echo "uploads/img_Uperf/".$_SESSION['UserImg'];}else{echo "img/usericon.png";}?>"></a>
                    <a href="#!name"><span class="white-text"> <?php echo $_SESSION['User_Name']; ?> </span></a><br>
                    <a href="#"><span class="white-text email"><?php echo $_SESSION['Nome_Completo']; ?></span></a>
                    <a href="#"><span class="white-text">Ranking: <?php //$_SESSION['PosicaoRanking']; ?>º </span></a>
                </div>
            </li>
            <li><a href="../home.php" class="waves-effect"><i class="material-icons black-text">home</i>Início</a></li>
            <li><a href="../disciplinas.php" class="waves-effect"><i class="material-icons black-text">collections_bookmark</i>Disciplinas</a></li>
            <li><a href="../exercicios.php" class="waves-effect"><i class="material-icons black-text">create</i>Exercícios</a></li>
             <!--<li><a href="#!" class="disabled"><i class="material-icons black-text">star</i>Favoritos</a></li>-->
            <li><a href="../forum/forum-index.php" class="waves-effect"><i class="material-icons black-text">question_answer</i>Fórum</a></li>
            <li><a href="../perfil.php" class="waves-effect"><i class="material-icons black-text"> account_box</i>Meu Perfil</a></li>
            <?php
                     if ($_SESSION['Categoria'] == "Tutor")
                    {
                        echo '<li><a href="gerir.php" class="waves-effect"><i class="material-icons black-text"> settings </i>Gerenciar Plataforma</a></li>';
                    }
                 ?>
            <li><a href="../sair.php" class="waves-effect waves-light btn red">Sair</a></li>
        </ul>

        
    </body>
</html>  