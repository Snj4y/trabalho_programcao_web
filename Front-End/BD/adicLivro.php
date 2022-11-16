<?php
    session_start();
    include_once('config.php');
    if(isset($_POST['submit']))
    {
        $titulo = $_POST['product_name'];
        $sinopse = $_POST['product_price'];
        $imagem = $_FILES['product_image'];
        $path = "arquivos/";        //local da pasta onde ficará as imagens
        $file_name = $imagem["full_path"];      //tratando e passando um nome unico para cada imagem  
        $new_file_name = uniqid();      
        $extensao = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $full_path = move_uploaded_file($imagem["tmp_name"], $path . $new_file_name . "." . $extensao);
        $path_s = $path . $new_file_name . "." . $extensao;
        $result = mysqli_query($conexao,"INSERT INTO livros(titulo,sinopse,imagem) VALUES ('$titulo','$sinopse','$path_s')"); //gravando no banco de dados

        $arq = fopen("Log.txt", "a+");              //Gravando as informações de adição de livros em arquivo .txt
            date_default_timezone_set('America/Sao_Paulo');
            $agora = date('d/m/Y H:i');
            fwrite($arq, "Livro ".$product." adicionado por ".$_SESSION['email']." ás ".$agora."\n");
            fclose($arq); 

        header('location: ../admin.php');
    }
    
?>