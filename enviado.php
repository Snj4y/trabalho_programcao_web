<?php

$nome = $_POST['usuario'];
$senha = $_POST['senha'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body{
            background-image: url(https://img.freepik.com/premium-vector/abstract-technology-chip-processor-background-circuit-board-html-code-3d-illustration-blue-technology-background-vector_115579-1483.jpg?w=2000);
        }
        .Box{
            background-color: rgba(0, 0, 0, 0.781);
            width: 20%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
            border-radius: 15px;
            color: white;
        }
    </style>
</head>
<body>
    <section class="Box">
        <h1>Informações</h1>
        <?php
            echo "<br>";
            echo "Usuario: ".$nome;
            echo "<br><br>";
            echo "Senha: ".$senha;
            echo "<br><br>";
        ?>
    </section> 
</body>
</html>