<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['role']);
    unset($_COOKIE['btnLogin']);
    unset($_COOKIE['btnLogout']);
    header("location: ../index.php");

?>
