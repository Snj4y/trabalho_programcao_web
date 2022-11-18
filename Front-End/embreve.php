<?php
    session_start();
    if((!isset($_SESSION['email'])== true)and (!isset($_SESSION['senha'])==true)) //Verifica se o usuário está logado
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variety Livros</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="index.php" class="logo"> <i class="fas fa-book"></i> Variety </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="Procure aqui..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="index.php">Inicio</a>
            <a href="index.php#featured">Populares</a>
            <a href="index.php#arrivals">Novos</a>
            <a href="biblioteca.php">Biblioteca</a>
            <a href="index.php#reviews">Reviews</a>
            <a href="index.php#blogs">blogs</a>
            <?php
            if($_SESSION['role'] == 2){ //Caso o usuário for um autor, aparece o botão que direciona para pagina de adicionar livro
                echo "<a href= 'autor.php'>Adicionar Livros</a>";
            }
            if($_SESSION['role'] == 3){ //Caso o usuário for um administrador, aparece o botão que direciona para página de gerância dos livros
                echo "<a href= 'admin.php'>Gerenciar Livros</a>";
                echo "<a href= 'adminlog.php'>Logs</a>";
            }
            ?>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="index.php" class="fas fa-home"></a>
    <a href="index.php#featured" class="fas fa-list"></a>
    <a href="index.php#arrivals" class="fas fa-tags"></a>
    <a href="index.php#reviews" class="fas fa-comments"></a>
    <a href="index.php#blogs" class="fas fa-blog"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>Login</h3>
        <span>Usuário</span>
        <input type="email" name="" class="box" placeholder="digite o email" id="">
        <span>Senha</span>
        <input type="password" name="" class="box" placeholder="digite a senha" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> Lembrar-se</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>Esqueceu a senha ? <a href="#">click aqui</a></p>
        <p>Não tem uma conta ? <a href="cadastro.php">crie uma</a></p>
    </form>

</div>
<section class="re">
    <div class="inf">
        <div class="digi">
            <h1 style="line-height:1.3em; text-align:center; font-size:95px;"><font face="Arial">EM</font></h1>
            <h1 style="line-height:1.3em; text-align:center; font-size:95px;"><font face ="Arial">BREVE</font></h1>
        </div>      
    </div>
</section>
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Nossas localizações</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Brasil </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> frança </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japão </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> áfrica </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="index.php"> <i class="fas fa-arrow-right"></i> inicio </a>
            <a href="index.php#featured"> <i class="fas fa-arrow-right"></i> populares </a>
            <a href="index.php#arrivals"> <i class="fas fa-arrow-right"></i> novos </a>
            <a href="biblioteca.php"> <i class="fas fa-arrow-right"></i> biblioteca </a>
            <a href="index.php#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="index.php#blogs"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="perfil.php"> <i class="fas fa-arrow-right"></i> perfil </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> favoritos </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> política de privacidade </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> metodos de pagamento </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Nossos serviços </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +55-0800-80808090 </a>
            <a href="#"> <i class="fas fa-phone"></i> +55-0800-90909080 </a>
            <a href="#"> <i class="fas fa-envelope"></i> suporte@varietylivros.com </a>
            <img src="image/worldmap.png" class="map" alt="">
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> created by <span>Grimmreaper</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- loader  -->

<div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>