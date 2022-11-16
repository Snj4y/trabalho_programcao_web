<?php
    session_start();
    include_once('config.php');
    if(isset($_POST['submit']))
    {
        $fisrtname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $senha = $_POST['password'];
        $confsenha = $_POST['confirmPassword'];
        if($_POST['gender'] == 'masculino'){
            $gender = 'M';
        }
        if($_POST['gender'] == 'feminino'){
            $gender = 'F';
        }
        if($_POST['gender'] == 'outros'){
            $gender = 'O';
        }
        if($_POST['gender'] == 'none'){
            $gender = 'N';
        }
        
        if(strcmp($senha,$confsenha) == 0){
            $result = mysqli_query($conexao,"INSERT INTO login(firstname,lastname,telefone,email,senha,role,gender) VALUES ('$fisrtname','$lastname','$number','$email','$senha','1','$gender')");
            header('Location: ../index.html');    
        }else{
            header('Location: ../cadastro.html');
        }
    }
?>