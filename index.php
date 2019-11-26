<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8/">
        <!--Importando Ícone da Google Font-->
         <link href="css/icon.css" rel="stylesheet"/>
        <!--Importando materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Importando CSS Personalizado-->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <!--"Mostrando" ao navegador que a página é optimizada para dispostivos mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>

        <!-- Altera a cor de fundo -->
        <style> body{ background-color: #eceff1;}
         .carousel-item {
                width: 100% !important;
                height: 100% !important;
            }</style>
      
      
    </head>

    <body>

        
        <header>
        <!--Incluindo a barra de navegação-->           
        <?php
            include 'nav.html'
        ?>
        </header>

        <main>


        <!--Área do Carrossel-->

        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="img/3.png"></a>
            <a class="carousel-item" href="#two!"><img src="img/1.png"></a>
            <a class="carousel-item" href="#three!"><img src="img/2.png"></a>
        </div> 
       
       </main>

       <footer>

       
       <footer class="page-footer grey lighten-2">
          <div class="footer-copyright grey lighten-2 black-text center-align">
            <div class="container">
            2019 - Trabalho de Conclusão de Curso ETIM Informática 
            </div>
          </div>

        <!--Vinculando JavaScript no final da página para ganho de performance-->
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        
        <script> 
           $('.carousel').carousel({
                fullWidth: true,
                fullHeight: true,
            });
            autoplay();
            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 5000);
            }
           
        </script>        
   
    </body>
</html>