<?php
    session_start();
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM login WHERE email = '$email' and senha = '$password'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            echo "<script>
                var resultado = confirm('tome');
                if (resultado == true) {
                    <?php 
                        header('location: ../index.html'); 
                    ?>
                }
                else{
                    
                }
            </script>";   
            //sleep(3);                          
            //header('location: ../index.html');
            //echo "<script>alert('Login não efetuado')</script>";   
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;                      
            //header('javascript:alert("Email enviado com Sucesso!"); location: ../index.html');
            echo "<script>alert('Login efetuado')</script>";
        }
    }
    else
    {
        header('Location: login.php');
    }
?>