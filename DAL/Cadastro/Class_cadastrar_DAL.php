<!--Vinculando CSS para correta exibição do modal-->
<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
<meta charset="utf-8"/>

<?php
    //arquivo chamado no action do formulario de cadastro
    require_once "Class_cadastro_DAL.php";
    require_once "../Class_conexao_DAL.php";
    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
   
    //pega os valores do formulario
    $pessoa['nome'] = mysqli_real_escape_string($conexao, $_POST['nome']);
    $pessoa['email'] = mysqli_real_escape_string($conexao, $_POST['email']);
    $pessoa['usernick'] = mysqli_real_escape_string($conexao, $_POST['usernick']);
    $pessoa['data_nascimento'] = mysqli_real_escape_string($conexao, $_POST['data_nascimento']);
    $pessoa['sexo'] = mysqli_real_escape_string($conexao, $_POST['sexo']);
    $pessoa['senha'] = mysqli_real_escape_string($conexao, $_POST['senha']);

    //chama função que vai inserir os dados no banco
    $result = Func_cadastrar_DAL($pessoa);//localizada no arquivo Class_cadastro_DAL, linha 3
    
    //teste do retorno
    if($result != "Usuário cadastrado com sucesso!")
    {//1
        //erro na execução, campo vazio ou dados invalidos       
        $_SESSION['auxiliar'] = $result;    
        echo $result;   
        header("Location: ../../cadastro.php");
    }//1
    elseif($result == "Usuário cadastrado com sucesso!")
    {//2
        //tudo deu certo, abre modal alertando
        echo'<div id="modal1" class="modal">                     
        <div class="modal-content">
            <div class="row center-align">
                <div class="row">
                    <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                </div>
                <h4>Você foi cadastrado com sucesso! </h4>
            <p> Clique em "OK" para ir para página de login! </p>
            </div>
        </div>
        
        <div class="modal-footer">
            <a href="../../login.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>';
    }//2
    elseif($result == "Email inválido")
    {//3
         //tudo deu certo, abre modal alertando
         echo'<div id="modal2" class="modal">                     
         <div class="modal-content">
             <div class="row center-align">
                 <div class="row">
                     <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                 </div>
                 <h4>Cadastro sem sucesso, email já cadastrados </h4>
             <p> Clique em "Voltar" para tentar novamente </p>
             </div>
         </div>
         
         <div class="modal-footer">
             <a href="../../cadastro.php" class="modal-action modal-close waves-effect waves-green btn-flat">Voltar</a>
         </div>';
    }//3
    Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56
?>

<!--Vinculando Scripts para correta exibição do modal-->
<script type="text/javascript" src="../../js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('#modal1').modal();
        $('#modal1').modal('open'); 
    });
    $(document).ready(function(){
        $('#modal2').modal();
        $('#modal2').modal('open'); 
    });
</script>

