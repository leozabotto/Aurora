<?php 
    //este função contem a query para executar o select de login
    Function Func_logar_DAL($objeto)
    {       
        //teste se as variaveis estão vazias 
        if ((!empty($objeto)) && (!empty($objeto['email'])) && (!empty($objeto['senha'])))
        {
            //tranfere os valores do array para variaveis
            $email =  $objeto['email'];            
            $senha =  $objeto['senha'];        
            
            //cria a querry
            $sql = "SELECT TBP.tipo, TBU.usernick, TBU.pessoa, TBP.sexo, TBP.Data_de_nascimento, TBP.nome, TBP.foto FROM TB_Usuario AS TBU, TB_Pessoa AS TBP WHERE TBU.email = '$email' && TBU.senha = '$senha' && TBU.pessoa = TBP.cod_pessoa LIMIT 1";
            
            //chama função que vai conectar ao banco e executar a query
            $resultado = Func_executeselect_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
            
            //testa o resultado da query
            if (empty($resultado))
            {
                //caso nao encontre os valores manda erro
                $objeto['auxiliar'] = "erro";            
            }
            else 
            {
                //se encontrar manda os dados
                $_SESSION['pessoa'] = $resultado['pessoa'];
                $objeto['usernick'] = $resultado['usernick'];
                $objeto['nome'] = $resultado['nome'];
                $objeto['foto'] = $resultado['foto'];
                $objeto['nasc'] = $resultado['Data_de_nascimento'];
                $objeto['sexo'] = $resultado['sexo'];
                $_SESSION['Categoria'] = $resultado['tipo'];
                $objeto['auxiliar'] = "logar";           
            }
        }
        else
        {
            //caso algum campo esteja vazio
            $objeto['auxiliar'] =  "campo vazio";
        }
        //retorna os resultados para a validação
        return $objeto;// rentorna para aquivo Class_logar_DAL, linha 14
    }

?>