<div class="input-field col s12 m6 l6">
    <select id="#" name="conteudo" required> <!--Campo do Conteúdo se Disciplina for PORTUGUÊS, só pode aparecer se a disciplina for selecionada--> 
        <optgroup label="Selecione:"> 
            <?php       
                $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3                                                                     
                $sql = "SELECT C.cod_conteudo, C.tema FROM TB_conteudos AS C, TB_materias AS D WHERE D.cod_materia = '1' AND C.materia = D.cod_materia";
                // executa a query
                $dados = mysqli_query($conexao, $sql);
                // transforma os dados em um array
                $linha = mysqli_fetch_assoc($dados);
                // calcula quantos dados retornaram
                $total = mysqli_num_rows($dados);
                do
                {
            ?>           
                <option value="<?php echo $linha["cod_conteudo"]; ?>"> <?php echo $linha["tema"]; ?> </option>
            <?php
                }while($linha = mysqli_fetch_assoc($dados));// finaliza o loop que vai mostrar os dados                                             
            ?>
        </optgroup>     
    </select>  
</div>
