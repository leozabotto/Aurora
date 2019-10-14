<?php
    //aquivo chamado no action do formulario de login
    session_start();
    require_once "../Class_conexao_DAL.php";
    require_once "Class_cadastrar_quest_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
    
    //pega os valores do formulario
    $objeto['tema'] = mysqli_real_escape_string($conexao, $_POST['conteudo2']);
    $objeto['dificuldade'] = mysqli_real_escape_string($conexao, $_POST['dificuldade']);
    $objeto['resposta'] = mysqli_real_escape_string($conexao, $_POST['resposta']);
    $objeto['enunciado'] = mysqli_real_escape_string($conexao, $_POST['enunciado']);
    $objeto['alta'] = mysqli_real_escape_string($conexao, $_POST['altA']);
    $objeto['altb'] = mysqli_real_escape_string($conexao, $_POST['altB']);
    $objeto['altc'] = mysqli_real_escape_string($conexao, $_POST['altC']);
    $objeto['altd'] = mysqli_real_escape_string($conexao, $_POST['altD']);
    $objeto['alte'] = mysqli_real_escape_string($conexao, $_POST['altE']);
    $objeto['resolucao'] = mysqli_real_escape_string($conexao, $_POST['resolucao']);

    switch($objeto['resposta'])
    {
        case "altA":
            $objeto['resposta'] =  $objeto['alta'];
        break;
        case "altB":
            $objeto['resposta'] =  $objeto['altb'];
        break;
        case "altC":
            $objeto['resposta'] =  $objeto['altc'];
        break;
        case "altD":
            $objeto['resposta'] =  $objeto['altd'];
        break;
        case "altE":
            $objeto['resposta'] =  $objeto['alte'];
        break;
    }

    //chama função que vai buscar os dados no banco
    $result = Func_cad_conteudo($objeto);

    if($result == "Questão em analise")
    {    


        //tudo deu certo, abre modal alertando
        echo('<h4>Questão cadastrada com sucesso! </h4>
            <p> Clique em "OK" </p>
            </div>
        </div>
        
        <div class="modal-footer">
            <a href="../../exercicios.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>
            
        ');
    }
    else
    {
        //erro na execução, campo vazio ou dados invalidos       
        $_SESSION['auxiliar'] = $result;    
        echo $result;   
       
    }
    Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56
    