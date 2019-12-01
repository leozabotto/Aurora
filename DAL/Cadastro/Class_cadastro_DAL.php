<?php
    //esta função contem as querry para executar o cadastro do usuario
    Function Func_cadastrar_DAL($objeto)
    {//1 
        if ((!empty($objeto)) && (!empty($objeto['email'])) && (!empty($objeto['senha'])) && (!empty($objeto['nome'])) && (!empty($objeto['sexo'])) && (!empty($objeto['usernick'])) && (!empty($objeto['data_nascimento'])) )
        {//2
            //tranfere os valores do array para variaveis
            $email =  $objeto['email'];           
            $senha =  $objeto['senha'];   
            $nome =  $objeto['nome'];            
            $sexo =  $objeto['sexo']; 
            $data_nascimento =  $objeto['data_nascimento'];            
            $usernick =  $objeto['usernick']; 

            //cria a querry inserir os dados da pessoa
            $emailV = "SELECT cod_user FROM TB_Usuario WHERE Email = '$email'";
                    
            //chama função que vai conectar ao banco e executar a query para encontrar codigo da pessoa
            $validoE = Func_executeselect_DAL($emailV);//localizada no arquivo ../Class_conexão_DAL, linha 27

            if((!empty($validoE)))
            {
                $resultado = "Email inválido";
            }
            else
            {                     
                //cria a querry inserir os dados da pessoa
                $sql = "INSERT INTO TB_pessoa (Nome, sexo, Data_de_nascimento, tipo, foto) VALUES ('$nome', '$sexo', '$data_nascimento', 'Aluno', 'usericon.png')";
                
                //chama função que vai conectar ao banco e executar a query de insert da pessoa
                $resultado = Func_executeinsert_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 40
                
                //testa se os dados foran inseridos
                if($resultado != "Registros adicionados com sucesso.")
                {//3
                    echo $resultado;
                    $resultado = "deu merda ao adicionar pessoa";
                }//3
                else
                {//4
                    // se foram inseridos segue o baile
                    //cria a query para encontrar o codigo da pessoa que foi adicionada
                    $sql = "SELECT cod_pessoa FROM TB_pessoa WHERE Nome = '$nome'";
                    
                    //chama função que vai conectar ao banco e executar a query para encontrar codigo da pessoa
                    $resultado = Func_executeselect_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 27
               
                    //testa o resultado da query
                    if (empty($resultado))
                    {//5
                        //caso ao encontre os valores manda erro
                        $resultado = "erro pessoa select";            
                    }//5
                    else 
                    {//6
                        //atruibui valor de pessoa a uma variavel
                        $pessoa = $resultado['cod_pessoa'];   
                        
                        //cria query para inserir dados de login do usuario
                        $sql = "INSERT INTO TB_usuario (email, senha, pessoa, usernick) VALUES ('$email', md5('$senha'), '$pessoa', '$usernick')";
                        
                        //chama função que vai conectar ao banco e executar a query de inserir dados de login do usuario
                        $resultado = Func_executeinsert_DAL($sql);//localizada no arquivo ../Class_conexão_DAL, linha 40
                        
                        //testa se foram adicionados
                        if($resultado != "Registros adicionados com sucesso.")
                        {//7
                            $resultado = "Houve algum problema ao inserir os dados.";
                        }//7
                        else
                        {//8
                            $resultado ="Usuário cadastrado com sucesso!";
                        }//8
                    }//6
                }//4    
            }            
        }//2      
        else
        {
            $resultado = "Campo Vazio!";
        } 
        return $resultado;
    }//1
?>

