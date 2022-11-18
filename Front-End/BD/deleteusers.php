<?php
    session_start();
    
    if(!empty($_GET['id']))
    {
        include_once('config.php');
        
        $idlogin = $_GET['id'];

        $sqlSelect = "SELECT * FROM login WHERE idlogin='$idlogin'";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {   
            $arq = fopen("Log.txt", "a+");              //Gravando as informações de exclusão de livros em arquivo .txt
            date_default_timezone_set('America/Sao_Paulo');
            $agora = date('d/m/Y H:i');
            fwrite($arq, "Usuário: ".var_dump($result)." deletado por ".$_SESSION['email']." às ".$agora."\n");
            fclose($arq); 

            $sqlDelete = "DELETE FROM login WHERE idlogin='$idlogin'";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }

    header('location: ../adminusers.php');

?>