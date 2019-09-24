<?php
//Incluir a conexão com banco de dados
include_once '../Class_conexao_DAL.php';
include_once '../../nav_home.php';


$conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3

//pega os valores do formulario
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$emailant = mysqli_real_escape_string($conexao, $_POST['emailant']);
$UimgNNo = mysqli_real_escape_string($conexao, $_SESSION['UserImg']);

 //cria a querry aleterar os dados da pessoa
 $sql2 = "UPDATE TB_pessoa AS P, TB_usuario AS U SET P.Nome='$nome',U.email='$email',U.senha='$senha',P.foto='$UimgNNo' WHERE U.email='$emailant' AND P.cod_pessoa=U.pessoa" ;
 
 //fazendo query 2
 $resultado2 = Func_executeupdate_DAL($sql2);//localizada no arquivo ../Class_conexão_DAL, linha 27

 if($resultado2=="Registros atualizados com sucesso.")
 {
	$_SESSION['Nome_Completo'] = $nome;
	$_SESSION['Email'] = $email;
	$_SESSION['Senha'] = $senha;
	$_SESSION['UserImg'] = $UimgNNo;
	$_SESSION['auxiliar'] = "Sucesso ao alterar seus dados"; 
	header("Location: ../../perfil.php");
 }
 else
 {
	$_SESSION['auxiliar'] = "Erro ao alterar seus dados";       
	header("Location: ../../perfil.php");
 }
?>