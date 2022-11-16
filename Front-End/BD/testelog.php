<?php
    session_start();
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['password'];

        $sql = "SELECT * FROM login WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('location: ../index.html');  
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;                    
            header('location: ../biblioteca.php');
        }
    }
    else
    {
        header('Location: index.html');
    }
?>