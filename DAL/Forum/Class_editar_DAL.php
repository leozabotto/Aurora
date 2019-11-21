<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
<meta charset="utf-8"/>

<?php

     include_once '../Class_conexao_DAL.php';
     $idr = $_GET['idr'];
     $idp = $_GET['idp'];
     
     $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
    
     $edit = mysqli_real_escape_string($conexao, $_POST['edit']);
    if($idr == "nulo")
    {
        $sql = "UPDATE TB_Perguntas_forum SET pergunta = '$edit' WHERE cod_pergunta = '$idp'";
    }
    else
    {    
        $sql = "UPDATE TB_Respostas_forum SET resposta = '$edit' WHERE cod_resposta = '$idr'";
    }

     $result = Func_executeupdate_DAL($sql);

     if($result == "Registros atualizados com sucesso.")
    {
        echo'<div id="modal1" class="modal">                     
        <div class="modal-content">
            <div class="row center-align">
                <div class="row">
                    <img class="responsive-img col s2 offset-s5" src="../../img/AuroraLogo.png"/>
                </div>
                <h4>Edição realizada com sucesso! </h4>
            <p> Clique em "OK" para continuar! </p>
            </div>
        </div>
        
        <div class="modal-footer">
            <a href="../../Forum/exibir-discussao.php?disc='.$idp.'" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>';
    }
    else
    {
        echo 'Impossível editar';
    }


?>

<script type="text/javascript" src="../../js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('#modal1').modal();
        $('#modal1').modal('open'); 
    });
</script>