<?php                                                                             
    $sql = "SELECT * FROM  TB_materias";
    $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
    // executa a query
    $dados = mysqli_query($conexao, $sql);
    // transforma os dados em um array
    $linha = mysqli_fetch_assoc($dados);
    // calcula quantos dados retornaram
    $total = mysqli_num_rows($dados);
    do
    {
?>
    <option value="<?php echo $linha["cod_materia"]; ?>"> <?php echo $linha["Nome"]; ?> </option>
<?php
    }while($linha = mysqli_fetch_assoc($dados));// finaliza o loop que vai mostrar os dados                                             
?>