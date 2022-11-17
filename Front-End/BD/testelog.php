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
            $arq = fopen("Log.txt", "a+");              //Gravando as informações de login em arquivo .txt
            date_default_timezone_set('America/Sao_Paulo');
            $agora = date('d/m/Y H:i');
            fwrite($arq, "Login realizado pelo email: ".$email." ás ".$agora."\n");
            fclose($arq);
            
            while($user_data = mysqli_fetch_assoc($result)){
                if($user_data['email'] == $email){
                    $role = $user_data['role'];
                }
            }

            $_SESSION['role'] = $role;
            $_SESSION['email'] = $email;    //Definindo as informações
            $_SESSION['senha'] = $senha;
                                
            header('location: ../biblioteca.php');
        }
    }
    else
    {
        header('Location: index.html');
    }
?>