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

        <style> body{ background-color: #eceff1; } </style>
      
    </head>

    <body>
           
        <?php
            include 'nav.html'
        ?>


        <!--Área do Carrossel-->

        <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img src="img/BannerLogo2.png"></a>
        </div>
            
   
        <?php
            include 'footer.html'
        ?>
        
    
  
              

            
           
            
                        

            

                  
       

        <!--Vinculando JavaScript no final da página para ganho de performance-->
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        
        <script> 
             $(".button-collapse").sideNav(); 
             $('.carousel.carousel-slider').carousel({fullWidth: true});
        </script>        
       

      
   
    </body>
</html>