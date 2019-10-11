<?php
//Incluir a conexão com banco de dados
include_once '../Class_conexao_DAL.php';
include_once '../../nav_home.php';

	$UimgExt = strtolower(substr($_FILES['Uimg']['name'],-4));//Pega o nome da extesão
    $UimgNNo = $_SESSION['User_Name'] . $UimgExt; //Nomeia o arquivo
    $UimgPasta = "../../uploads/img_Uperf/"; //Defini o nome da pasta em que o arquivo será salvo

    $_SESSION['UserImg'] = $UimgNNo; //Amazena o novo nome na sessão
    
    switch($_FILES['Uimg']['type']):
        case 'image/jpeg';
        case 'image/pjpeg':

            //Definindo dimensões desejadas
            $AltuD = "512";
            $LargD = "512";

            //Criando imagem temporária
            $ImgTemp = imagecreatefromjpeg($_FILES['Uimg']['tmp_name']);

            //Pegando dimensões originais
            $LargO = imagesx($ImgTemp);
            $AltuO = imagesy($ImgTemp);

            //Criando novas dimensões
            $NLarg = $LargD ? $LargD : floor (($LargO / $AltuO) * $LargD);
            $NAltu = $AltuD ? $AltuD : floor (($AltuO / $LargO) * $AltuD);

            //Criando a nova imagem
            $ImgRed = imagecreatetruecolor($NLarg,$NAltu);
            imagecopyresampled($ImgRed, $ImgTemp, 0, 0 ,0 ,0, $NLarg,$NAltu,$LargO,$AltuO);
            
            if(file_exists($UimgPasta.$UimgNNo))
            {
                unlink($UimgPasta.$UimgNNo); //Deleta caso arquivo já exista
                imagejpeg($ImgRed, $UimgPasta.$UimgNNo);//efetua o upload
            }
            else
            {
                imagejpeg($ImgRed, $UimgPasta.$UimgNNo);//efetua o upload
            }
        break;
        case 'image/png';
        case 'image/x-png':

            //Definindo dimensões desejadas
            $AltuD = "512";
            $LargD = "512";

            //Criando imagem temporária
            $ImgTemp = imagecreatefrompng($_FILES['Uimg']['tmp_name']);

            //Pegando dimensões originais
            $LargO = imagesx($ImgTemp);
            $AltuO = imagesy($ImgTemp);

            //Criando novas dimensões
            $NLarg = $LargD ? $LargD : floor (($LargO / $AltuO) * $LargD);
            $NAltu = $AltuD ? $AltuD : floor (($AltuO / $LargO) * $AltuD);

            //Criando a nova imagem
            $ImgRed = imagecreatetruecolor($NLarg,$NAltu);
            imagecopyresampled($ImgRed, $ImgTemp, 0, 0 ,0 ,0, $NLarg,$NAltu,$LargO,$AltuO);

            if(file_exists($UimgPasta.$UimgNNo))
            {
                unlink($UimgPasta.$UimgNNo); //Deleta caso arquivo já exista
                imagepng($ImgRed, $UimgPasta.$UimgNNo);//efetua o upload
            }
            else
            {
                imagepng($ImgRed, $UimgPasta.$UimgNNo);//efetua o upload
            }
        break;
    
    endswitch;

$conexao = Func_connect_DAL();//Localizada no arquivo ../Class_conexao_DAL, linha 3

//pega os valores do formulario
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$emailant = mysqli_real_escape_string($conexao, $_POST['emailant']);
$UimgNNo = mysqli_real_escape_string($conexao, $_SESSION['UserImg']);

 //cria a querry aleterar os dados da pessoa
 $sql2 = "UPDATE TB_pessoa AS P, TB_usuario AS U SET P.Nome='$nome', U.senha='$senha',P.foto='$UimgNNo' WHERE U.email='$emailant' AND P.cod_pessoa=U.pessoa" ;
 
 //fazendo query 2
 $resultado2 = Func_executeupdate_DAL($sql2);//localizada no arquivo ../Class_conexão_DAL, linha 27

 if($resultado2=="Registros atualizados com sucesso.")
 {
	$_SESSION['Nome_Completo'] = $nome;
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