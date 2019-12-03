<?php
    //aquivo chamado no action do formulario de login
    session_start();
    require_once "../Class_conexao_DAL.php";

    $conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3
   
    //pega os valores do formulario
    $ContQ = mysqli_real_escape_string($conexao, $_POST['conteudo']);
    $RespQ = mysqli_real_escape_string($conexao, $_POST['respq']);
    $RespU = mysqli_real_escape_string($conexao, $_SESSION['codU']);
    
    if($RespQ == "s")
    {
    //chama função que vai buscar os dados no banco
    $sql = "SELECT DISTINCT TBR.resposta, TBQ.cod_pergunta, TBQ.enunciado, TBQ.dificuldade, TBQ.resolucao, TBQ.resposta AS correcao, TBQ.alt_a, TBQ.alt_b, TBQ.alt_c, TBQ.alt_d, TBQ.alt_e FROM tb_questoes AS TBQ, tb_respostas AS TBR, tb_temas AS TBC WHERE TBC.cod_tema = '$ContQ' AND TBC.cod_tema = TBQ.tema AND TBR.pergunta = TBQ.cod_pergunta AND TBR.usuario = '$RespU' AND TBQ.estado = 'Aprovado'";
    }
    else
    {
      //chama função que vai buscar os dados no banco
      $sql = "SELECT DISTINCT TBQ.cod_pergunta, TBQ.enunciado, TBQ.dificuldade, TBQ.resolucao, TBQ.resposta AS correcao, TBQ.alt_a, TBQ.alt_b, TBQ.alt_c, TBQ.alt_d, TBQ.alt_e FROM tb_questoes AS TBQ, tb_temas AS TBC WHERE TBC.cod_tema = '$ContQ' AND TBC.cod_tema = TBQ.tema AND TBQ.estado = 'Aprovado' AND TBQ.cod_pergunta NOT IN (SELECT pergunta FROM tb_respostas WHERE usuario = '$RespU')";
    }
    $result = mysqli_query($conexao, $sql);
    
    $n = 0;

    while($resultado = mysqli_fetch_assoc($result))
    {
        $questaos[$n]['CodQ'] = $resultado['cod_pergunta'];
        $questaos[$n]['Enunciado'] = $resultado['enunciado'];
        $questaos[$n]['Dificuldade'] = $resultado['dificuldade'];
        $questaos[$n]['Resol'] = $resultado['resolucao'];
        $questaos[$n]['RespS'] = $resultado['correcao'];
        $questaos[$n]['A'] = $resultado['alt_a'];
        $questaos[$n]['B'] = $resultado['alt_b'];
        $questaos[$n]['C'] = $resultado['alt_c'];
        $questaos[$n]['D'] = $resultado['alt_d'];
        $questaos[$n]['E'] = $resultado['alt_e'];
        if($RespQ == "s"){$questaos[$n]['Resp'] = $resultado['resposta'];}
        $n++;
    }

    $_SESSION['pags'] = "";
    $_SESSION['pags'] = $questaos;

    //teste do retorno
    if(empty($_SESSION['pags']))
    {//2
        //erro na execução, campo vazio ou dados invalidos
        unset($_SESSION['busca']); 
        unset($_SESSION['busca2']);       
        echo $_SESSION['auxiliar'] = "Nenhuma questão encontrada";       
        header("Location: ../../exercicios.php");
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