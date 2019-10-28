<?php
//exclui todas as variaveis de sessão do usúario
session_start();
unset($_SESSION['pessoa']);
unset($_SESSION['User_Name']);
unset($_SESSION['Nome_Completo']);
unset($_SESSION['Email']);
unset($_SESSION['Senha']);
header("location: index.php")
?>