<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--Importando Ícone da Google Font-->
         <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
        <!--Importando materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Importando CSS Personalizado-->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--"Mostrando" ao navegador que a página é optimizada para dispostivos mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title> BuilderMind</title>

    </head>
    <body>

        <header>
           
        <?php
            include 'nav.html' /*Include NavBar*/
        ?>

        </header>

        <main>

            <!--Saudação  Seção do formulário-->

            <div class="section">
                <div class=" col s12 offset-s12">
                    <div class="row" id="slogin">
                        <div class="col s12 m8 offset-m2 center-align">
                            <h5><strong> Bem-vindo(a)! </strong></h5> <br>
                            <h5> Insira seus dados para acessar o Aurora:</h5>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="input-field col s12 m8 l6 offset-m2 offset-l3">
                                <input id="user" type="email"class="validate">
                                <label for="user"> Email </label>
                                <span class="helper-text" data-error="Email inválido" data-success=""></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 m12">
                            <div class="input-field col s12 m8 l6 offset-m2 offset-l3">
                                <input id="passuser" type="password"class="validate">
                                <label for="passuser"> Senha </label>
                            </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="input-field col s12 m12 center-align">
                                <button class="btn waves-effect waves-light btn-large orange darken-4" type="submit" name="action">ENTRAR</button> &nbsp; &nbsp; <a ref="#"> Esqueci minha senha! </a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col s12 m12 center-align">
                            <h6>Ou crie sua conta clicando <a href="cadastro.php">aqui</a>!</h6>
                        </div>
                    </div>
                </div>

            </div>

        <footer>
            <?php
                include 'footer.html'
            ?>
        </footer>

        <!--Vinculando JavaScript no final da página para ganho de performance-->
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script> 
            $(".button-collapse").sideNav(); 
       </script>     
    
    </body>
</html>