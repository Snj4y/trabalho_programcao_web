<?php
    session_start();
    if((!isset($_SESSION['email'])== true)and (!isset($_SESSION['senha'])==true)) //Verifica se o usuário está logado
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("location: index.html");
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
            <a href="#">Biblioteca</a>
            <a href="index.html#reviews">Reviews</a>
            <a href="index.html#blogs">blogs</a>
            <?php
            if($_SESSION['role'] == 2){ //Caso o usuário for um autor, aparece o botão que direciona para pagina de adicionar livro
                echo "<a href= 'autor.php'>Adicionar Livros</a>";
            }
            if($_SESSION['role'] == 3){ //Caso o usuário for um administrador, aparece o botão que direciona para página de gerância dos livros
                echo "<a href= 'admin.php'>Gerenciar Livros</a>";
            }
            ?>
        </nav>
    </div>

</header>

<!-- header section ends -->

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
        <p>Não tem uma conta ? <a href="cadastro.php">crie uma</a></p>
    </form>

</div>

<section class="bg">
    <div class="containerp">
        
    <div class="cardp">
        <div class="card-image">
            <img src="image/01.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>The Witcher</h3>
            <p>Enquanto Yennefer permanece prisioneira e Geralt passa o inverno...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div> 
    
    <div class="cardp">
        <div class="card-image">
            <img src="image/02.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>Harry Potter</h3>
            <p>Harry Potter é um garoto órfão que vive infeliz com seus tios... </p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>

    <div class="cardp">
        <div class="card-image">
            <img src="image/03.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>IT, a coisa</h3>
            <p>Um grupo de crianças se une para investigar o misterioso...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>
</section>

<section class="bg">
    <div class="containerp">
        
    <div class="cardp">
        <div class="card-image">
            <img src="image/04.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>A Metamorfose</h3>
            <p>A metamorfose (Die Verwandlung, em alemão) é uma novela...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div> 
    
    <div class="cardp">
        <div class="card-image">
            <img src="image/05.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>Neuromancer</h3>
            <p>Considerada a obra precursora do movimento cyberpunk e um...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>

    <div class="cardp">
        <div class="card-image">
            <img src="image/06.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>Eu, robo</h3>
            <p>Um dos maiores clássicos da literatura de ficção científica. Eu...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>
</section>

<section class="bg">
    <div class="containerp">
        
    <div class="cardp">
        <div class="card-image">
            <img src="image/07.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>Outsider</h3>
            <p>O corpo de um menino de onze anos é encontrado abandonado no...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div> 
    
    <div class="cardp">
        <div class="card-image">
            <img src="image/08.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>Your Name</h3>
            <p>Mitsuha é a filha do prefeito de uma pequena cidade, mas sonha em ...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>

    <div class="cardp">
        <div class="card-image">
            <img src="image/09.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>O Vilarejo</h3>
            <p>O Vilarejo narra a história de um pequeno povoado abandonado e ...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>
</section>

<section class="bg">
    <div class="containerp">
        
    <div class="cardp">
        <div class="card-image">
            <img src="image/10.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>O Corvo</h3>
            <p>O poema trata da visita misteriosa de um corvo falante a um homem...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div> 
    
    <div class="cardp">
        <div class="card-image">
            <img src="image/11.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>One-punch Man</h3>
            <p>One Punch-Man conta a história de Saitama, um super-herói extremamente...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>

    <div class="cardp">
        <div class="card-image">
            <img src="image/12.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>Chainsaw Man</h3>
            <p>Chainsaw Man acompanha a história do jovem Denji, que ficou endividado...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>
</section>

<section class="bg">
    <div class="containerp">
        
    <div class="cardp">
        <div class="card-image">
            <img src="image/13.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>Mushoku Tensei</h3>
            <p>Um homem de 34 anos, desempregado e sem perspectivas, é atropelado por...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div> 
    
    <div class="cardp">
        <div class="card-image">
            <img src="image/14.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>V de Vingança</h3>
            <p>Após uma guerra mundial, a Inglaterra é ocupada por um governo fascista...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>

    <div class="cardp">
        <div class="card-image">
            <img src="image/15.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>O Paciente</h3>
            <p>conta suas experiências como médico residente em um sombrio...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>
</section>

<section class="bg">
    <div class="containerp">
        
    <div class="cardp">
        <div class="card-image">
            <img src="image/16.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>Fullmetal Achemist</h3>
            <p>Os irmãos Edward e Al Elric praticam o tabu da transmutação humana...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div> 
    
    <div class="cardp">
        <div class="card-image">
            <img src="image/17.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>Psicose</h3>
            <p>Psicose conta a história de Marion Crane, que foge após roubar o dinheiro...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>

    <div class="cardp">
        <div class="card-image">
            <img src="image/18.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>Attack on Titan</h3>
            <p>Para escapar dos titãs, gigantes devoradores de homens, a humanidade...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div>
</section>

<section class="bg">
    <div class="containerp">
        
    <div class="cardp">
        <div class="card-image">
            <img src="image/19.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>Hunter x Hunter</h3>
            <p>A série conta a história de Gon Freecss, um garoto de 12 anos que pretende...</p>
            <button class="add-to-cart">
                Ler
            </button>
        </div>
    </div> 
    
    <div class="cardp">
        <div class="card-image">
            <img src="image/20.png" alt="...">
            <i class="bx bx-star"></i>
        </div>
        <div class="card-content">
            <h3>A arte da guerra</h3>
            <p>Aborda a importância de avaliar e planejar, tendo conhecimento de cinco fatores...</p>
            <button class="add-to-cart">
                Ler
            </button>
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
            <a href="index.html"> <i class="fas fa-arrow-right"></i> inicio </a>
            <a href="index.html#featured"> <i class="fas fa-arrow-right"></i> populares </a>
            <a href="index.html#arrivals"> <i class="fas fa-arrow-right"></i> novos </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> biblioteca </a>
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