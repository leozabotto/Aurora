<?php
    //esta função contem as querry para executar o cadastro do usuario
    Function Func_cadastrar_DAL($objeto)
    {//1 
        if ((!empty($objeto)) && (!empty($objeto['topico'])) && (!empty($objeto['mensagem'])) && (!empty($objeto['pessoa'])) )
        {//2
            //tranfere os valores do array para variaveis
            date_default_timezone_set('America/Sao_Paulo');
            $data = date('d/m/Y \à\s H:i:s');
            $pergunta = $objeto['topico'];
            $mensagem = $objeto['mensagem'];
            $usuario = $objeto['pessoa'];
            
            //cria a querry inserir os dados da pessoa
            $sql = "INSERT INTO TB_Respostas_forum (resposta, verificada, usuario, pergunta, datap) VALUES ('$mensagem', '0', '$usuario', '$pergunta', '$data')"; 

            //chama função que vai conectar ao banco e executar a query de insert 
            $resultado = Func_executeinsert_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 40
            echo $resultado;  
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
        {//5
            $resultado = "Campo Vazio!";            
        }//5
        return $resultado;
    }//1