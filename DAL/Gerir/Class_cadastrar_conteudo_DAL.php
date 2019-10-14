<?php 
    //este função contem a query para executar o select de login
    Function Func_cad_conteudo($objeto)
    {       
        //teste se as variaveis estão vazias 
        if ((!empty($objeto)) && (!empty($objeto['tema'])) && (!empty($objeto['titulo'])) && (!empty($objeto['conteudo'])) )
        {
            //tranfere os valores do array para variaveis          
            $tema =  $objeto['tema'];        
            $titulo = $objeto['titulo'];
            $conteudo = $objeto['conteudo'];
            $pessoa = $_SESSION['pessoa'];
            $estado = "Em analise";
            
            //cria a querry
            $sql = "INSERT INTO tb_conteudo (titulo, texto, estado, tema, pessoa) VALUES ('$titulo', '$conteudo', '$estado', '$tema', '$pessoa')";
            
            //chama função que vai conectar ao banco e executar a query
            $resultado = Func_executeinsert_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
            
           //testa se foram adicionados
           if($resultado != "Registros adicionados com sucesso.")
           {//7
               //$resultado = "Houve algum problema ao inserir os dados.";
           }//7
           else
           {//8
               $resultado = "conteudo em analise";
           }//8
        }
        else
        {
            $resultado = "Campo Vazio!";
        } 
        return $resultado;
    }//1