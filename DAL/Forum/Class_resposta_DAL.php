<?php
    //aquivo chamado no action do formulario de novo topico
    session_start();
    require_once "Class_responder_DAL.php";
    require_once "../Class_conexao_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
   
     //pega os valores do formulario
     $topico['topico'] = $_GET['disc'];
     $topico['mensagem'] = mysqli_real_escape_string($conexao, $_POST['resposta']);
     $topico['pessoa'] = $_SESSION['pessoa'];
    
     //chama função que vai inserir os dados no banco
    $result = Func_cadastrar_DAL($topico);//localizada no arquivo Class_topico_DAL, linha 3

    if($result == "Mensagem postada com sucesso!")
    {//1
        header("location: ../../forum/exibir-discussao.php?disc=". $topico['topico']."");
        echo $result;
    }//1
    elseif($result == "Campo Vazio!")
    {//2
        header("location: ../../forum/exibir-discussao.php");
    }//2
    else
    {//3
        echo "deu merda por ai";
    }//3