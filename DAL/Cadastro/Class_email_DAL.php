<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM TB_Usuario WHERE email LIKE '$usuarios'";
$resultado_user = mysqli_query($conexao, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 ))
{
	echo "email em utilização";
}