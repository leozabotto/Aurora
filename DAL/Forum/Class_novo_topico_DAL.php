<!--Vinculando CSS para correta exibição do modal-->
<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
<meta charset="utf-8"/>
<?php
    //aquivo chamado no action do formulario de novo topico
    session_start();
    require_once "Class_topico_DAL.php";
    require_once "../Class_conexao_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
   
     //pega os valores do formulario
     $topico['disciplina'] = mysqli_real_escape_string($conexao, $_POST['disciplina']);
     $topico['categoria'] = mysqli_real_escape_string($conexao, $_POST['categoria']);
     $topico['conteudo'] = mysqli_real_escape_string($conexao, $_POST['conteudo']);
     $topico['titulo'] = mysqli_real_escape_string($conexao, $_POST['titulo-topico']);
     $topico['mensagem'] = mysqli_real_escape_string($conexao, $_POST['mensagem']);
     $topico['pessoa'] = $_SESSION['pessoa'];
    
    //chama função que vai inserir os dados no banco
    $result = Func_cadastrar_DAL($topico);//localizada no arquivo Class_topico_DAL, linha 3

    if($result == "Mensagem postada com sucesso!")
    {//1
        echo('<div id="modal1" class="modal">                     
        <div class="modal-content">
            <div class="row center-align">
                <div class="row">
                    <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                </div>
                <h4>Seu post foi criado com sucesso! </h4>
            <p> Basta ir na categoria correspondente que você irá encontrá-lo. </p>
            </div>
        </div>
        
        <div class="modal-footer">
            <a href="../../forum/forum-index.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>');
    }//1
    elseif($result == "Campo Vazio!")
    {//2
        header("location: ../../forum/novo-topico.php");
    }//2
    else
    {//3
        echo "Há algo errado.";
    }//3
?>

<!--Vinculando Scripts para correta exibição do modal-->
<script type="text/javascript" src="../../js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('#modal1').modal();
    $('#modal1').modal('open'); 
  });
</script>   