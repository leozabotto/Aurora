<?php
    //aquivo chamado no action do formulario de login
    session_start();
    require_once "../Class_conexao_DAL.php";
    require_once "Class_cadastrar_conteudo_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
    
    //pega os valores do formulario
    $objeto['tema'] = mysqli_real_escape_string($conexao, $_POST['conteudo']);
    $objeto['titulo'] = mysqli_real_escape_string($conexao, $_POST['titulo-topico']);
    $objeto['conteudo'] = mysqli_real_escape_string($conexao, $_POST['texto']);

    //chama função que vai buscar os dados no banco
    $result = Func_cad_conteudo($objeto);

    if($result == "conteudo em analise")
    {    


        //tudo deu certo, abre modal alertando
        echo('<h4>Conteudo cadastrado com sucesso! </h4>
            <p> Clique em "OK" </p>
            </div>
        </div>
        
        <div class="modal-footer">
            <a href="../../disciplinas.php" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
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
    