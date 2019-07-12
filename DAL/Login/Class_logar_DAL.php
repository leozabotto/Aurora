<?php
    //aquivo chamado no action do formulario de login
    session_start();
    require_once "Class_login_DAL.php";
    require_once "../Class_conexao_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
   
    //pega os valores do formulario
    $pessoa['email'] = mysqli_real_escape_string($conexao, $_POST['email']);
    $pessoa['senha'] = mysqli_real_escape_string($conexao, $_POST['senha']);
    
    //chama função que vai buscar os dados no banco
    $result = Func_logar_DAL($pessoa);//localizada no arquivo Class_login_DAL, linha 3
    
    //teste do retorno
    if($result['auxiliar'] == "erro")
    {
        //erro na execução, campo vazio ou dados invalidos       
        $_SESSION['auxiliar'] = "Usuário ou senha inválidos!";       
        header("Location: ../../login.php");
    }
    elseif($result['auxiliar'] == "campo vazio")
    {
        //erro na execução, campo vazio ou dados invalidos       
        $_SESSION['auxiliar'] = "Campos Vazios";       
        header("Location: ../../login.php");
    } 
    elseif($result['auxiliar'] == "logar")
    {    
        //tudo deu certo loga
        $_SESSION['User_Name'] = $result['usernick'];
        $_SESSION['Nome_Completo'] = $result['nome'];
        $_SESSION['Email'] = $pessoa['email'];
        $_SESSION['Senha'] = $pessoa['senha'];
        header("Location: ../../home.php");
    }
    Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56
    

?>