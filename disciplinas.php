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
	
	<body class="grey lighten-5">

			<?php	
				include 'nav_home.php';
			?>
	
			<main>	

                <div class="container"> 
                    <div class="row center-align mt-2">
                        <div class="col s12">
                            <h4> Disciplinas </h4>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col s12">
                            <ul id="#" class="tabs grey lighten-5">
                                <li class="tab col s3"><a class="active" href="#geral">Geral</a></li>
                                <li class="tab col s3"><a href="#humanas">Humanas</a></li>
                                <li class="tab col s3"><a href="#exatas">Exatas</a></li>
                                <li class="tab col s3"><a href="#bio">Biológicas</a></li>
                            </ul>
                        </div>  
                    </div>                  
            
                    <div id="geral" class="row"> <!--  Todas as gerais ficam dentro dessa row-->

                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                   <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Português">    <img class="activator" src="uploads/img_Materias/port.png"> </a>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Matemática">    <img class="activator" src="uploads/img_Materias/mat.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Física">    <img class="activator" src="uploads/img_Materias/fis.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Química">    <img class="activator" src="uploads/img_Materias/quim.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Biologia">    <img class="activator" src="uploads/img_Materias/bio.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=História">    <img class="activator" src="uploads/img_Materias/hist.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Geografia">    <img class="activator" src="uploads/img_Materias/geo.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Filosofia">    <img class="activator" src="uploads/img_Materias/filo.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Sociologia">    <img class="activator" src="uploads/img_Materias/socio.png"> </a>
                                </div>
                            </div>
                        </div>


            


                    </div>

                    <div id="humanas" class="row"> <!--  Todas as humanas ficam dentro dessa row-->
                    
                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Português">    <img class="activator" src="uploads/img_Materias/port.png"> </a>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=História">    <img class="activator" src="uploads/img_Materias/hist.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Geografia">    <img class="activator" src="uploads/img_Materias/geo.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Filosofia">    <img class="activator" src="uploads/img_Materias/filo.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Sociologia">     <img class="activator" src="uploads/img_Materias/socio.png"> </a>
                                </div>
                            </div>
                        </div>
                      
                    </div>

                    <div id="exatas" class="row"> <!--  Todas as exatas ficam dentro dessa row-->
                    
                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Matemática">    <img class="activator" src="uploads/img_Materias/mat.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Física">    <img class="activator" src="uploads/img_Materias/fis.png"> </a>
                                </div>
                            </div>
                        </div>


                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Química">    <img class="activator" src="uploads/img_Materias/quim.png"> </a>
                                </div>
                            </div>
                        </div>
                       
                    </div>

                    <div id="bio" class="row"> <!--  Todas as biológicas ficam dentro dessa row-->
                        
                        <div class="col s12 m6 l6">
                            <div class="card hoverable">
                                <div class="card-image card-image waves-effect waves-block waves-light">
                                    <!--LINK PARA CONTEÚDO--> <a href="disciplinas-cont.php?disc=Biologia">    <img class="activator" src="uploads/img_Materias/bio.png"> </a>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    
			</main>

         
        <script>
           $(document).ready(function(){
               $('.tabs').tabs();
           })
        </script>
		 
		
	
	</body>
	
</html>




