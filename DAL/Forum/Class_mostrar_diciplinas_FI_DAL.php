<?php                                                                             
    $sql = "SELECT * FROM  TB_materias ORDER BY Nome ASC";
    $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
    // executa a query
    $dados = mysqli_query($conexao, $sql);
    // transforma os dados em um array
    $linha = mysqli_fetch_assoc($dados);
    do
    {//1
        $disciplina = $linha["cod_materia"];
        echo '<tr>
                <td> <i class="'.$linha["cor"].'-text material-icons"> '.$linha["imagem"].' </i> <a class="" href="categorias.php?disc='.$linha["Nome"].'"> '.$linha["Nome"].' </a></td>';
                //conta a quantidade de comentários
                $sql = "SELECT COUNT(RF.cod_resposta) AS respostas FROM TB_Respostas_forum as RF, TB_Perguntas_forum as PF where PF.disciplina = '$disciplina' and RF.pergunta = PF.cod_pergunta";
                $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                // executa a query
                $dado = mysqli_query($conexao, $sql);
                // transforma os dados em um array
                $comentario = mysqli_fetch_assoc($dado);
                echo '<td  class="center-align"> <span> '.$comentario["respostas"].' <span> </td>  <!--NÚMERO DE COMENTÁRIOS -->';
                //conta a quantidade de discussões
                $sql = "SELECT COUNT(cod_pergunta) AS topicos FROM TB_Perguntas_forum where disciplina = '$disciplina'";
                $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
                // executa a query
                $dado = mysqli_query($conexao, $sql);
                // transforma os dados em um array
                $topico = mysqli_fetch_assoc($dado);
                echo '<td  class="center-align"> <span> '.$topico["topicos"].' <span> </td>  <!--NÚMERO DE DISCUSSÕES -->                
             </tr>';
    }//1
    while($linha = mysqli_fetch_assoc($dados));// finaliza o loop que vai mostrar os dados                                             
   
    Func_fechaconexao_DAL($conexao);