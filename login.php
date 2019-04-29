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


        <main>

            <!--Saudação  Seção do formulário-->

            <div class="section">
                <div class=" col s12 offset-s12">
                    <div class="row" id="slogin">
                        <div class="col s12 m8 offset-m2 center-align">
                            <h5><strong> Bem-vindo(a)! </strong></h5> <br>
                            <h5> Insira seus dados para acessar o Aurora:</h5>
                            <h5>
                                <?php
                                    if (isset($_SESSION['auxiliar']))
                                    {
                                        echo $_SESSION['auxiliar'];
                                        unset ($_SESSION['auxiliar']);							
                                    }
                                ?>
                            </h5>
                        </div>
                    </div>

                    

                <form method = "POST" action = "DAL/Login/Class_logar_DAL.php">    
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="input-field col s12 m8 l4 offset-m2 offset-l4">
                                <input id="user" type="email"class="validate" name="email">
                                <label for="user"> Email </label>
                                <span class="helper-text" data-error="Email inválido" data-success=""></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 m12">
                            <div class="input-field col s12 m8 l4 offset-m2 offset-l4">
                                <input id="passuser" type="password"class="validate" name="senha">
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
                 </form>   

                    <div class="row">
                        <div class="col s12 m12 center-align">
                            <h6>Ou crie sua conta clicando <a href="cadastro.php">aqui</a>!</h6>
                        </div>
                    </div>
                </div>

            </div>


        <!--Vinculando JavaScript no final da página para ganho de performance-->
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script> 
            $(".button-collapse").sideNav(); 
       </script>     
    
    </body>
</html>