<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--Importando materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Importando CSS Personalizado-->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--"Mostrando" ao navegador que a página é optimizada para dispostivos mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Inserindo script de Validação-->
        <script src="BLL/ValidarL.js"></script>
        <title> Login Aurora </title>

    </head>
    <body class="grey lighten-4">

        <!-- Iniciando a sessão-->
        <?php
            session_start();
        ?>

        <!-- Conteúdo principal -->
        <main>
            <div class="container">
                <div class="row center-align mt-2">
                    <div class="col s12 m8 offset-m2">
                        <!--Card que contém o formulário de login -->
                        <div class="card">
                            <div class="card-content">
                                <div class="card-title">
                                    <span class="card-title"> 
                                        <div class="row">
                                            <a href="index.php"><img class="responsive-img col s2 offset-s5" src="img/AuroraLogo.png"/></a>
                                        </div>
                                            
                                        <h5><strong> Bem-vindo(a)! </strong></h5>
                                        <h6> Insira seus dados para acessar o Aurora:</h6>  
                                    </span>
                                </div>

                                <form name = "Login" method = "POST" action = "DAL/Login/Class_logar_DAL.php">    
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="input-field col s12 m8 offset-m2">
                                                <!--Input de email-->
                                                <input id="user" type="email"class="validate" name="email">
                                                <label for="user"> Email </label>
                                                <span class="helper-text" data-error="Email inválido" data-success=""></span>
                                            </div>
                                        </div>
                                   
                                        <div class="col s12 m12">
                                            <div class="input-field col s12 m8 offset-m2">
                                                <input id="passuser" type="password"class="validate" name="senha">
                                                <label for="passuser"> Senha </label>
                                            </div>
                                        </div>

                                        <div class="col s12 m12">
                                            <div class="input-field col s12 m12 center-align">
                                                <button class="btn waves-effect waves-light btn-large orange darken-2" type="button" name="action" onclick="ValidL()">ENTRAR</button> &nbsp; &nbsp; <a href="#modal1" class="modal-trigger"> Esqueci minha senha! </a>
                                            </div>
                                        </div>

                                        <div class="row center-align">
                                            <div class="col s12">
                                                <h6 class="red-text" id="Retorno"> </h6> 
                                                
                                                <h6 class="red-text">
                                                    <?php
                                                        if (isset($_SESSION['auxiliar']))
                                                        {
                                                            echo $_SESSION['auxiliar'];
                                                            unset ($_SESSION['auxiliar']);							
                                                        }
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col s12 m12 center-align">
                                            <h6>Ou crie sua conta clicando <a href="cadastro.php">aqui</a>!</h6>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div id="modal1" class="modal">                     
                <div class="modal-content">
                    <div class="row center-align">
                        <div class="row">
                            <img class="responsive-img col s2 offset-s5" src="img/AuroraLogo.png"/>
                        </div>
                        <h4>Esqueci a senha </h4>
                    <p> Insira seu e-mail cadastrado para enviarmos sua nova senha: </p>
                    </div>
                    <div class="row">
                        <form action="#" method="#">
                            <div class="col s12 m12">
                                <div class="input-field col s12 m8 offset-m2">
                                    <input id="user" type="email"class="validate" name="email">
                                    <label for="user"> Email </label>
                                    <span class="helper-text" data-error="Email inválido" data-success=""></span>
                                </div>
                            </div>
                            <div class="col s12 m12 center-align">
                                <button class="btn waves-effect waves-light btn orange darken-2" type="button" name="action" onclick="">ENVIAR</button>
                                &nbsp; <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </main>


        <!--Vinculando JavaScript no final da página para ganho de performance-->
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script> 
           
            $(document).ready(function(){
                $('.modal').modal();
            });
       
       
       </script>     
    
    </body>
</html>