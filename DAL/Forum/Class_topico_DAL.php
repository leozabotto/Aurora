<?php
    //esta função contem as querry para executar o cadastro do usuario
    Function Func_cadastrar_DAL($objeto)
    {//1 
        if ((!empty($objeto)) && (!empty($objeto['disciplina'])) && (!empty($objeto['categoria'])) && (!empty($objeto['conteudo'])) && (!empty($objeto['titulo'])) && (!empty($objeto['mensagem'])) && (!empty($objeto['pessoa'])) )
        {//2
            //tranfere os valores do array para variaveis
            date_default_timezone_set('America/Sao_Paulo');
            $data = date('d/m/Y \à\s H:i:s');
            $disciplina = $objeto['disciplina'];
            $categoria = $objeto['categoria'];
            $conteudo = $objeto['conteudo'];
            $titulo = $objeto['titulo'];
            $mensagem = $objeto['mensagem'];
            $usuario = $objeto['pessoa'];
            
                //cria a querry inserir os dados da pessoa
                $sql = "INSERT INTO TB_Perguntas_forum (titulo, pergunta, usuario, disciplina, conteudo, categoria, datap, visualizacoes) VALUES ('$titulo', '$mensagem', '$usuario', '$disciplina', '$conteudo', '$categoria', '$data', '0')"; 

                //chama função que vai conectar ao banco e executar a query de insert 
                $resultado = Func_executeinsert_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 40
              
                //testa se foram adicionados
                if($resultado != "Registros adicionados com sucesso.")
                {//3
                    $resultado = "Houve algum problema ao postar a mensagem.";
                }//3
                else
                {//4
                    $resultado ="Mensagem postada com sucesso!";
                }//4
        }//2
        else
        {
            $resultado = "Campo Vazio!";
        } 
        return $resultado;
    }//1