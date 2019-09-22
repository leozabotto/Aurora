<?php
    try
    {
    InserirUfoto();
    }
    catch(Exception $ex)
    {
        $_SESSION['UimgNNo'] = null;
    }
    header("Location: Class_alterarU_DAL.php");
?>