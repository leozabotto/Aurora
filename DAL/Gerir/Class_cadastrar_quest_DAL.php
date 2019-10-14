<?php 
    //este função contem a query para executar o select de login
    Function Func_cad_conteudo($objeto)
    {       
        //teste se as variaveis estão vazias 
        if ((!empty($objeto)) && (!empty($objeto['tema'])) && (!empty($objeto['dificuldade'])) && (!empty($objeto['resposta'])) && (!empty($objeto['enunciado'])) && (!empty($objeto['alta'])) && (!empty($objeto['altb'])) && (!empty($objeto['altc'])) && (!empty($objeto['altd'])) && (!empty($objeto['alte'])) && (!empty($objeto['resolucao'])) )
        {
            //tranfere os valores do array para variaveis          
            $tema =  $objeto['tema'];        
            $dificuldade = $objeto['dificuldade'];
            $resposta = $objeto['resposta'];
            $enunciado = $objeto['enunciado'];
            $alta = $objeto['alta'];
            $altb = $objeto['altb'];
            $altc = $objeto['altc'];
            $altd = $objeto['altd'];
            $alte = $objeto['alte'];
            $resolucao = $objeto['resolucao'];
            $pessoa = $_SESSION['pessoa'];
            $estado = "Em analise";

            //cria a querry
            $sql = "INSERT INTO tb_questoes (enunciado, dificuldade, alt_a, alt_b, alt_c, alt_d, alt_e, resposta, resolucao, tema, pessoa) VALUES ('$enunciado', '$dificuldade', '$alta', '$altb', '$altc', '$altd', '$alte', '$resposta', '$resolucao', '$tema', '$pessoa');            ";
            
            //chama função que vai conectar ao banco e executar a query
            $resultado = Func_executeinsert_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
            
           //testa se foram adicionados
           if($resultado != "Registros adicionados com sucesso.")
           {//7
               //$resultado = "Houve algum problema ao inserir os dados.";
           }//7
           else
           {//8
               $resultado = "Questão em analise";
           }//8
        }
        else
        {
            $resultado = "Campo Vazio!";
        } 
        return $resultado;
    }//1