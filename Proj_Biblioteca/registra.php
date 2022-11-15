<?php
    session_start();
    include_once('config.php');
    if(isset($_POST['submit']))
    {
        $usuario = $_POST['user'];
        $senha = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone']; 

        $result = mysqli_query($conexao,"INSERT INTO login(nome,senha) VALUES ('$usuario','$senha')");

        header('Location: login.php');
    }
?>