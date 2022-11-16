<?php
    session_start();
    include_once('./BD/config.php');
    if((!isset($_SESSION['email'])== true)and (!isset($_SESSION['senha'])==true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("location: login.php");
    }
    /*if($_SESSION['role'] != 3){
        header("location: index.html");
    }*/
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM livros";

    $result = $conexao->query($sql);
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

        <a href="#" class="logo"> <i class="fas fa-book"></i> Variety </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="Procure aqui..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="index.html">Inicio</a>
            <a href="index.html#featured">Populares</a>
            <a href="index.html#arrivals">Novos</a>
            <a href="biblioteca.html">Biblioteca</a>
            <a href="index.html#reviews">Reviews</a>
            <a href="index.html#blogs">blogs</a>
        </nav>
    </div>

</header>

<!-- header section ends -->
<section class="admbg">
    <div class="containeradm">

    <div class="admin-product-form-container">
 
       <form action="./BD/adicLivro.php" method="post" enctype="multipart/form-data">
          <h3>Adicionar um novo Livro</h3>
          <input type="text" placeholder="Insira o Titulo do livro" name="product_name" class="box">
          <input type="text" placeholder="Insira a sinopse" name="product_price" class="box">
          <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
          <input type="submit" class="btn" name="submit" value="add produto">
       </form>
 
    </div>
 
    <div class="product-display">
       <table class="product-display-table">
          <thead>
          <tr>
             <th>ID</th>
             <th>Imagem</th>
             <th>Titulo</th>
             <th>Sinopse</th>
             <th>Ação</th>
          </tr>
          </thead>
          
          <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo ("<tr>");
                    echo("<td>". $user_data['idlivros']."</td>");
                    echo("<td><img src =". $user_data['imagem']." height='100' width='100'></td>");
                    echo("<td>". $user_data['titulo']."</td>");
                    echo("<td>". $user_data['sinopse']."</td>");
                    echo("<td><a class='btn btn-sm btn-primary' href='editlivro.php?id=$user_data[idlivros]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                        </a>
                            <a class='btn btn-sm btn-danger' href='BD/delete.php?id=$user_data[idlivros]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                    <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                </svg>
                            </a>
                        </td>");
                    echo("<tr>");
                }
            ?>
       </table>
    </div>
 
    </div>
</section>
<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="index.html" class="fas fa-home"></a>
    <a href="index.html#featured" class="fas fa-list"></a>
    <a href="index.html#arrivals" class="fas fa-tags"></a>
    <a href="index.html#reviews" class="fas fa-comments"></a>
    <a href="index.html#blogs" class="fas fa-blog"></a>
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
        <p>Esqueceu a senha ? <a href="recuperar.html">click aqui</a></p>
        <p>Não tem uma conta ? <a href="cadastro.html">crie uma</a></p>
    </form>

</div>



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
            <a href="index.html"> <i class="fas fa-arrow-right"></i> inicio </a>
            <a href="index.html#featured"> <i class="fas fa-arrow-right"></i> populares </a>
            <a href="index.html#arrivals"> <i class="fas fa-arrow-right"></i> novos </a>
            <a href="biblioteca.html"> <i class="fas fa-arrow-right"></i> biblioteca </a>
            <a href="index.html#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="index.html#blogs"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="perfil.html"> <i class="fas fa-arrow-right"></i> perfil </a>
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