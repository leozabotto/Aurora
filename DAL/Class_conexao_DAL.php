<?php   
    //Esta função faz a conexão com o Banco de Dados
    function Func_connect_DAL()
    {//1
        //variaveis de conexão
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "DB_Aurora";

        //execeuta conexao
        $conexao = mysqli_connect($host, $user, $password, $database);
        $sql = 'SET NAMES "utf8"';
        mysqli_query($conexao, $sql);
        $sql = 'SET character_set_connection=utf8';
        mysqli_query($conexao, $sql);
        $sql = 'SET character_set_client=utf8';
        mysqli_query($conexao, $sql);
        $sql = 'SET character_set_results=utf8';
        mysqli_query($conexao, $sql);       

        if(mysqli_connect_errno ($conexao))
        {//2
            //se der erro 
            echo "Falha na conexao com o Banco de Dados!<br />";
            echo "Erro: " . mysqli_error();
            die();
        }//2
        else
        {//3
            //se der certo continua na Class_logar_DAL
            return $conexao;
        }//3
    }//1

    //Esta função executa uma Query de select
    function Func_executeselect_DAL($query)
    {//4
        $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
        $result = mysqli_query($conexao, $query);
        $resultado = mysqli_fetch_assoc($result);   
           
        return $resultado;//retorna para o aquivo que chamo FUNÇÂO GENERICA
        
        //função fecha a conexao com o banco  
        Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56
    }//4

    //esta funçao executa uma query de insert
    function Func_executeinsert_DAL($query)
    {//5
        $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
        if ( mysqli_query ( $conexao, $query )) 
		{//6
			$resultado = "Registros adicionados com sucesso.";
		}//6
		else
		{//7
			$resultado = "ERRO: Não foi possível capaz de executar $query." . mysqli_error ( $conexao );
        }//7
        return $resultado;//retorna para o aquivo que chamo 

        //função fecha a conexao com o banco
        Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56
    }//5

    //esta funçao executa uma query de update
    function Func_executeupdate_DAL($query)
    {//8
        $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
        if ( mysqli_query ( $conexao, $query )) 
		{//9
			$resultado = "Registros atualizados com sucesso.";
		}//9
		else
		{//10
			$resultado = "ERRO: Não foi possível capaz de executar $query." . mysqli_error ( $conexao );
        }//10
        return $resultado;//retorna para o aquivo que chamo 

        //função fecha a conexao com o banco
        Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56
    }///8
    //esta função fecha a conexo
    function Func_fechaconexao_DAL($conexao)
    {//11
        mysqli_close($conexao);
    }//11
?>