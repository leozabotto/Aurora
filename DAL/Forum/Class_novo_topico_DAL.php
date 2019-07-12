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
    {
        //direcionar para algum lugar depois 
        echo $result;
    }
    elseif($result == "Campo Vazio!")
    {
        header("location: ../../forum/novo-topico.php");
    }
    else
    {
        echo "deu merda por ai";
    }
?>
    