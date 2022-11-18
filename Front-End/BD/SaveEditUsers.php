<?php
    include_once('config.php');
    session_start();

    if(isset($_POST['update']))
    {
        $idlogin = $_POST['idlogin'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $role = $_POST['role'];
        $gender = $_POST['gender'];

        $sqlUpdate = "UPDATE login SET firstname ='$firstname', lastname ='$lastname', telefone ='$telefone', email ='$email', senha ='$senha', role ='$role', gender ='$gender'  WHERE idlogin='$idlogin'";

        $arq = fopen("Log.txt", "a+");              //Gravando as informações de edição de livros em arquivo .txt
        date_default_timezone_set('America/Sao_Paulo');
        $agora = date('d/m/Y H:i');
        fwrite($arq, "Usuario ".$email." alterado por ".$_SESSION['email']." às ".$agora."\n");
        fclose($arq); 

        $result = $conexao->query($sqlUpdate);
    }
    header('location: ../adminusers.php');
?>