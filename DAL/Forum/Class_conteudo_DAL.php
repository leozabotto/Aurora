<?php
//Incluir a conexão com banco de dados
include_once '../Class_conexao_DAL.php';

$conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3

$id_conteudo = $_REQUEST['id_conteudo'];

    $sql = "SELECT C.cod_conteudo, C.tema FROM TB_conteudos AS C, TB_materias AS D WHERE D.cod_materia = '$id_conteudo' AND C.materia = D.cod_materia";
    // executa a query
    $dados = mysqli_query($conexao, $sql);
    // transforma os dados em um array

    while ($linha = mysqli_fetch_assoc($dados) ) 
    {
		  $conteudo[] = array(
			'cod_conteudo'	=> $linha ['cod_conteudo'],
			'tema' => utf8_encode($linha ['tema']),
		);
	  }
  Func_fechaconexao_DAL($conexao);
  
	echo(json_encode($conteudo));
