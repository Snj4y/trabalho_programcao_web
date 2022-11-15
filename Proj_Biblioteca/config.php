<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'biblioteca';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno)
    //{
        //echo "erro ";
    //}
    //else
    //{
       //echo "conexao bem sucessedida";
    //}
    
?>