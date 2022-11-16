<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');
        
        $idlivros = $_GET['id'];

        $sqlSelect = "SELECT * FROM livros WHERE idlivros='$idlivros'";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM livros WHERE idlivros='$idlivros'";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }

    header('location: ../admin.php');

?>