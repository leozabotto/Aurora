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
        <title> Cadastro Aurora </title>

    </head>
    <body>
       
        <!--Saudação e Seção do formulário-->

        <div class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2 center-align">
                    <h4><strong> Cadastre-se </strong></h4> <br>
                    <h4> Insira seus dados abaixo:</h4>
                </div>
            </div>

            <?php
                if (isset($_SESSION['auxiliar']))
                {
                    echo $_SESSION['auxiliar'];
                    unset ($_SESSION['auxiliar']);							
                }
            ?>
                
            <form name="" method="post" action="DAL/Cadastro/Class_cadastrar_DAL.php">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="input-field col s12 m8 l6 offset-m2 offset-l3">
                            <input id="user" type="text" name="nome" class="validate"> <!--Campo Nome-->
                            <label for="user"> Nome </label>
                            <span class="helper-text" data-error="Insira seu nome" data-success=""></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m12">
                        <div class="input-field col s12 m8 l6 offset-m2 offset-l3">
                            <input id="user" type="email" name="email" class="validate"> <!--Campo Email-->
                            <label for="user"> Email </label>
                            <span class="helper-text" data-error="Insira um email válido" data-success=""></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m12">
                        <div class="input-field col s12 m8 l6 offset-m2 offset-l3">
                            <input id="user" type="text" name="usernick" class="validate">
                            <label for="user"> Nome de Usuário </label> <!--Campo Usuário-->
                            <span class="helper-text" data-error="Insira um nome de usuário válido" data-success=""></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6 l3 offset-l2">
                        <div class="input-field col s14 m9 l15 offset-m4 offset-l4">
                            <input type="text" id="nasc" name="data_nascimento" class="datepicker"> <!--Campo Data de Nascimento-->
                            <label for="nasc"> Nascimento </label>
                        </div>
                    </div>

                    <div class="col s6 l3 offset-l2">
                        <div class="input-field col s10 m8 offset-s2">
                            <select name="sexo">
                                <optgroup label="Selecione:">
                                    <option value="homem">Masculino</option>
                                    <option value="mulher">Feminino</option>
                                </optgroup>     
                            </select>  
                            <label>Sexo</label>                    <!--Campo Data de Sexo-->              
                        </div>
                    </div>     
                 </div> 

                <div class="row">
                    <div class="col s12 m12">
                        <div class="input-field col s12 m8 l6 offset-m2 offset-l3">
                            <input id="passuser" type="password" name="senha" class="validate">
                            <label for="passuser"> Senha </label> <!--Campo Senha-->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m12">
                        <div class="input-field col s12 m8 l6 offset-m2 offset-l3">
                            <input id="passuserconf" type="password" name="confsenha" class="validate">
                            <label for="passuserconf"> Confirmar Senha </label> <!--Campo Confirmar Senha-->
                        </div>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col s12 m12">
                        <div class="input-field col s12 m12 center-align">
                            <button class="btn waves-effect waves-light btn-large orange darken-2" type="submit" name="action">CADASTRAR</button> <!--Botão Cadastrar--> 
                        </div>
                    </div>
                </div>
            </form>
                
            <div class="row">
                <div class="col s12 m12 center-align">
                    <h6>Já é cadastrado? Clique <a href="login.php">aqui</a>!</h6>
                </div>
            </div>
         
        </div>

       


        <!--Vinculando JavaScript no final da página para ganho de performance-->
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <!--Ativando recursos via jQuery-->
        <script> 

            $(".button-collapse").sideNav(); 

            $(document).ready(function() {
                $('select').material_select();
            });
             
            $('.datepicker').pickadate({
                monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
                weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
                today: 'Hoje',
                clear: 'Limpar',
                close: 'Pronto',
                labelMonthNext: 'Próximo mês',
                labelMonthPrev: 'Mês anterior',
                labelMonthSelect: 'Selecione um mês',
                labelYearSelect: 'Selecione um ano',
                selectMonths: true,
                selectMonths: true, 
                selectYears: 80, 
                max: true,
            });

                
        </script>   
     
    </body>
</html>