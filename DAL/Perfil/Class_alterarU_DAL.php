<?php
//Incluir a conexão com banco de dados
include_once '../Class_conexao_DAL.php';

$conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3

//pega o email antigo para buscar o cod da pessoa
$emailant = mysqli_real_escape_string($conexao, $_POST['emailant']);

//cria a querry aleterar os dados da pessoa
$sql1 = "SELECT pessoa FROM TB_usuario WHERE email='$emailant'" ;

//fazendo query 1
$result = mysqli_query($conexao, $sql1);
$resultado1 = mysqli_fetch_array($result);

$pessoa= $resultado1['pessoa'];

//pega os valores do formulario
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

 //cria a querry aleterar os dados da pessoa
 $sql2 = "UPDATE TB_pessoa AS P, TB_usuario AS U SET P.Nome='$nome',U.email='$email',U.senha='$senha' WHERE U.pessoa='$pessoa' AND P.cod_pessoa='$pessoa'" ;
 
 //fazendo query 2
 $resultado2 = Func_executeupdate_DAL($sql2);//localizada no arquivo ../Class_conexão_DAL, linha 27

 if($resultado2=="Registros atualizados com sucesso.")
 {
	$_SESSION['Nome_Completo'] = $nome;
	$_SESSION['Email'] = $email;
	$_SESSION['Senha'] = $senha;
	header("Location: ../../perfil.php");
 }
 else
 {
	$_SESSION['auxiliar'] = "Erro ao alterar seus dados";       
	header("Location: ../../perfil.php");
 }
?>