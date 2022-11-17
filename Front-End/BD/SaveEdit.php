<?php
    include_once('config.php');
    session_start();

    if(isset($_POST['update']))
    {
        $idlivros = $_POST['idlivros'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_FILES['product_image'];
        $path = "arquivos/";
        $file_name = $product_image["full_path"];
        $new_file_name = uniqid();
        $extensao = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $full_path = move_uploaded_file($product_image["tmp_name"], $path . $new_file_name . "." . $extensao);
        $path_s = "BD/" . $path . $new_file_name . "." . $extensao;
        $sqlUpdate = "UPDATE livros SET titulo ='$product_name', sinopse='$product_price', imagem='$path_s' WHERE idlivros='$idlivros'";

        $arq = fopen("Log.txt", "a+");              //Gravando as informações de edição de livros em arquivo .txt
        date_default_timezone_set('America/Sao_Paulo');
        $agora = date('d/m/Y H:i');
        fwrite($arq, "Livro ".$product_name." alterado por ".$_SESSION['email']." ás ".$agora."\n");
        fclose($arq); 

        $result = $conexao->query($sqlUpdate);
    }
    header('location: ../admin.php');
?>