<?php
//Incluir a conexão com banco de dados
include_once '../Class_conexao_DAL.php';

$conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM TB_Usuario WHERE email LIKE '$usuarios'";
$resultado_user = mysqli_query($conexao, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 ))
{//1
	echo "Email em utilização!";
}//1