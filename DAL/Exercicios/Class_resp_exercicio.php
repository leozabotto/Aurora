<?php
    //aquivo chamado no action do formulario de login
    session_start();
    require_once "../Class_conexao_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3

    //Definindo questão e reposta
    $Questao = mysqli_real_escape_string($conexao, $_POST['Alt']);
    $Resposta = mysqli_real_escape_string($conexao, $_POST['resposta']);
    $Usuario = mysqli_real_escape_string($conexao, $_SESSION['codU']);
    $n = $_SESSION["questaoesc"]; 
    $CodQ = $_SESSION['pags'][$n]['CodQ'];

    //cria a querry
    $sql = "INSERT INTO TB_respostas (resposta, usuario, pergunta) VALUES ('$Resposta','$Usuario','$Questao')";
            
    //chama função que vai conectar ao banco e executar a querys
    if (mysqli_query( $conexao, $sql )) 
    {//2
        //tudo deu certo 
        $_SESSION['RespQ'] = "s";
        echo $_SESSION['pags'][$n]['Resp'] = $Resposta;
        header("Location: ../../questao.php?n=".$n);
    }//2
    else
    { //3  
        //erro na execução, campo vazio ou dados invalidos
        $_SESSION['auxiliar'] = "Resposta com erro";       
        //header("Location: ../../exercicios.php");
    }//3
    Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56