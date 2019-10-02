<?php   
    //Esta função faz a conexão com o Banco de Dados
    function Func_connect_DAL()
    {
        //variaveis de conexão
        $host = "localhost";
        $user = "root";
        $password = "@etec123";
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
        {
            //se der erro 
            echo "Falha na conexao com o Banco de Dados!<br />";
            echo "Erro: " . mysqli_error();
            die();
        }
        else
        {
            //se der certo continua na Class_logar_DAL
            return $conexao;
        }
    }

    //Esta função executa uma Query de select
    function Func_executeselect_DAL($query)
    {
        $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
        $result = mysqli_query($conexao, $query);
        $resultado = mysqli_fetch_assoc($result);   
           
        return $resultado;//retorna para o aquivo que chamo FUNÇÂO GENERICA
        
        //função fecha a conexao com o banco  
        Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56
    }

    //esta funçao executa uma query de insert
    function Func_executeinsert_DAL($query)
    {
        $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
        if ( mysqli_query ( $conexao, $query )) 
		{
			$resultado = "Registros adicionados com sucesso.";
		} 
		else
		{
			$resultado = "ERRO: Não foi possível capaz de executar $query." . mysqli_error ( $conexao );
        }
        return $resultado;//retorna para o aquivo que chamo 

        //função fecha a conexao com o banco
        Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56
    }

    //esta funçao executa uma query de insert
    function Func_executeupdate_DAL($query)
    {
        $conexao = Func_connect_DAL();//localizada no arquivo Class_conexao_DAL, linha 3
        if ( mysqli_query ( $conexao, $query )) 
		{
			$resultado = "Registros atualizados com sucesso.";
		} 
		else
		{
			$resultado = "ERRO: Não foi possível capaz de executar $query." . mysqli_error ( $conexao );
        }
        return $resultado;//retorna para o aquivo que chamo 

        //função fecha a conexao com o banco
        Func_fechaconexao_DAL($conexao);//localizada no arquivo Class_conexao_DAL, linha 56
    }
    //esta função fecha a conexo
    function Func_fechaconexao_DAL($conexao)
    {
        mysqli_close($conexao);
    }
?>