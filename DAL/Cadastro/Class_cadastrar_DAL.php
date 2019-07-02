<!--Vinculando CSS para correta exibição do modal-->
<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>

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
    {
        //erro na execução, campo vazio ou dados invalidos       
        $_SESSION['auxiliar'] = $result;    
        echo $result;   
        header("Location: ../../cadastro.php");
    }
    elseif($result == "Usuário cadastrado com sucesso!")
    {    
        /*tudo deu certo loga
        $_SESSION['auxiliar'] = $result;
        echo $_SESSION['auxiliar'];
        header("Location: ../../login.php");*/

        //tudo deu certo, abre modal alertando
        echo('<div id="modal1" class="modal">
                <div class="modal-content">
                 <h4>Usuário cadastrado com sucesso!</h4>
                 <p>Clique em "Ok" para logar!</p>
                </div>
                <div class="modal-footer">
                    <a href="../../login.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
                </div>
            </div>');
    }
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
</script>

