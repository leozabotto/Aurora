<?php                                                                             
    $sql = "SELECT * FROM  TB_materias";
    $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
    // executa a query
    $dados = mysqli_query($conexao, $sql);
    // transforma os dados em um array
    $linha = mysqli_fetch_assoc($dados);
    do
    {

        echo'<option value="'.$linha["cod_materia"].'">'.$linha["Nome"].'</option>';

    }while($linha = mysqli_fetch_assoc($dados));// finaliza o loop que vai mostrar os dados                                             
   
    Func_fechaconexao_DAL($conexao);