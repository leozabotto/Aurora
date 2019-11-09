<?php
    //aquivo chamado no action do formulario de login
    include_once '../../nav_home.php';
    require_once "../Class_conexao_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
   
    //pega os valores do formulario
    $ContQ = mysqli_real_escape_string($conexao, $_POST['conteudo']);
    $RespQ = mysqli_real_escape_string($conexao, $_POST['respq']);
    
    if($RespQ == "s")
    {
    //chama função que vai buscar os dados no banco
    $sql = "SELECT TBQ.cod_pergunta, TBQ.enunciado, TBQ.dificuldade, TBQ.resolucao, TBQ.alt_a, TBQ.alt_b, TBQ.alt_c, TBQ.alt_d, TBQ.alt_e FROM tb_questoes AS TBQ, tb_respostas AS TBR, tb_temas AS TBC WHERE TBC.tema = '$ContQ' && TBR.resposta = '$RespQ'";
    }
    else
    {
      //chama função que vai buscar os dados no banco
      $sql = "SELECT TBQ.cod_pergunta, TBQ.enunciado, TBQ.dificuldade, TBQ.resolucao, TBQ.alt_a, TBQ.alt_b, TBQ.alt_c, TBQ.alt_d, TBQ.alt_e FROM tb_questoes AS TBQ, tb_temas AS TBC WHERE TBC.cod_tema = '$ContQ'";  
    }
    $result = mysqli_query($conexao, $sql);
    
    $n = 0;

    while($resultado = mysqli_fetch_assoc($result))
    {
        $questaos[$n]['CodQ'] = $resultado['cod_pergunta'];
        $questaos[$n]['Enunciado'] = $resultado['enunciado'];
        $questaos[$n]['Dificuldade'] = $resultado['dificuldade'];
        $questaos[$n]['Resol'] = $resultado['resolucao'];
        $questaos[$n]['A'] = $resultado['alt_a'];
        $questaos[$n]['B'] = $resultado['alt_b'];
        $questaos[$n]['C'] = $resultado['alt_c'];
        $questaos[$n]['D'] = $resultado['alt_d'];
        $questaos[$n]['E'] = $resultado['alt_e'];
        $n++;
    }

    $_SESSION['pags'] = $questaos;

    //teste do retorno
    if(empty($_SESSION['pags']))
    {//2
        //erro na execução, campo vazio ou dados invalidos
        unset($_SESSION['busca']); 
        unset($_SESSION['busca2']);       
        echo $_SESSION['auxiliar'] = "Busca com erro";       
        //header("Location: ../../exercicios.php");
    }//2
    else
    { //3  
        //tudo deu certo 
        $_SESSION['busca'] = "Sucesso";
        $_SESSION['busca2'] = "Sucesso";
        $_SESSION['RespQ'] = $RespQ;
        $_SESSION['n'] = $n;
        header("Location: ../../exercicios.php");
    }//3
    Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56