<?php
    //Incluir a conexão com banco de dados
    include_once '../../nav_home.php';

    $UimgExt = strtolower(substr($_FILES['Uimg']['name'],-4));//Pega o nome da extesão
    $UimgNNo = $_SESSION['User_Name'] . $UimgExt; //Nomeia o arquivo
    $UimgPasta = "../../uploads/img_Uperf/"; //Defini o nome da pasta em que o arquivo será salvo
    
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


    $_SESSION['UserImg'] = $UimgNNo; //Amazena o novo nome na sessão

    $_SESSION['auxiliar'] = "Sucesso ao alterar seus dados"; 

    header("Location: ../../perfil.php");
    
?>