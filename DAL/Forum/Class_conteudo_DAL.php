<?php
//Incluir a conexão com banco de dados
include_once '../Class_conexao_DAL.php';

$conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3

$id_conteudo = $_REQUEST['id_conteudo'];

    $sql = "SELECT T.cod_tema, T.tema FROM TB_Temas AS T, TB_materias AS D WHERE D.cod_materia = '$id_conteudo' AND T.materia = D.cod_materia";
    // executa a query
    $dados = mysqli_query($conexao, $sql);
    // transforma os dados em um array

    while ($linha = mysqli_fetch_assoc($dados) ) 
    {//1
		  $conteudo[] = array(
			'cod_tema'	=> $linha ['cod_tema'],
			'tema' => ($linha ['tema']),
		);
	  }//1
  Func_fechaconexao_DAL($conexao);
  
	echo(json_encode($conteudo));