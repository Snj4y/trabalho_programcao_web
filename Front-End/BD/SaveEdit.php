<?php 
    include_once('config.php');

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
        $path_s = $path . $new_file_name . "." . $extensao;

        $sqlUpdate = "UPDATE livros SET titulo ='$product_name', sinopse='$product_price', imagem='$product_image' WHERE idlivros='$idlivros'";

        $result = $conexao->query($sqlUpdate);
    }
    header('location: ../admin.php');
?>