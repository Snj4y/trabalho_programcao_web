<?php
    session_start();
    if((!isset($_SESSION['email'])== true)and (!isset($_SESSION['senha'])==true)){  //Caso não esteja logado, a role inicia valendo 1
        $_SESSION['role'] = 1;
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
            <a href="#home">Inicio</a>
            <a href="#featured">Populares</a>
            <a href="#arrivals">Novos</a>
            <a href="biblioteca.php">Biblioteca</a>
            <a href="#reviews">Reviews</a>
            <a href="#blogs">blogs</a>
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
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="./BD/testelog.php" method="post">
        <h3>Login</h3>
        <span>Usuário</span>
        <input type="email" name="email" class="box" placeholder="digite o email" id="email">
        <span>Senha</span>
        <input type="password" name="password" class="box" placeholder="digite a senha" id="password">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> Lembrar-se</label>
        </div>
        <input type="submit" name="submit" value="sign in" class="btn">
        <p>Esqueceu a senha ? <a href="recuperar.html">click aqui</a></p>
        <p>Não tem uma conta ? <a href="cadastro.php">crie uma</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Plano com 10% de desconto esse mês</h3>
            <p>Leia seus livros preferidos sem nem uma restrição e sem burocracia, e com a oferta desse mês você poderá ter o melhor serviço E-Biblioteca da internet.</p>
            <a href="#" class="btn">Assinar agora</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>100% seguro</h3>
            <p>garantimos a segurança da sua conta</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>Releitura</h3>
            <p>Releia quantas vezes quiser</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>Suporte 24/7</h3>
            <p>Nos chame a qualquer hora</p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>Populares</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-1.png" alt="">
                </div>
                <div class="content">
                    <h3>The Witcher</h3>
                    <a href="#" class="btn">Ler</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-2.png" alt="">
                </div>
                <div class="content">
                    <h3>Harry Potter</h3>
                    <a href="#" class="btn">Ler</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-3.png" alt="">
                </div>
                <div class="content">
                    <h3>IT A coisa</h3>
                    <a href="#" class="btn">Ler</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-4.png" alt="">
                </div>
                <div class="content">
                    <h3>A Metamorfose</h3>
                    <a href="#" class="btn">Ler</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-5.png" alt="">
                </div>
                <div class="content">
                    <h3>Neuromancer</h3>
                    <a href="#" class="btn">Ler</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-6.png" alt="">
                </div>
                <div class="content">
                    <h3>Eu, Robo</h3>
                    <a href="#" class="btn">Ler</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-7.png" alt="">
                </div>
                <div class="content">
                    <h3>Outsider</h3>
                    <a href="#" class="btn">Ler</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-8.png" alt="">
                </div>
                <div class="content">
                    <h3>Your Name</h3>
                    <a href="#" class="btn">Ler</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-9.png" alt="">
                </div>
                <div class="content">
                    <h3>O Vilarejo</h3>
                    <a href="#" class="btn">Ler</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-10.png" alt="">
                </div>
                <div class="content">
                    <h3>O Corvo</h3>
                    <a href="#" class="btn">Ler</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- newsletter section starts -->

<section class="newsletter">

    <form action="">
        <h3>Fique por dentro das últimas novidades</h3>
        <input type="email" name="" placeholder="digite seu email" id="" class="box">
        <input type="submit" value="Confirmar" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>Novos no Site</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-11.png" alt="">
                </div>
                <div class="content">
                    <h3>One-Punch Man</h3>
                    <div class="price">Vol. 1</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-12.png" alt="">
                </div>
                <div class="content">
                    <h3>Chainsaw Man</h3>
                    <div class="price">Vol. 1</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-13.png" alt="">
                </div>
                <div class="content">
                    <h3>Mushoku Tensei</h3>
                    <div class="price">Vol.1</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-14.png" alt="">
                </div>
                <div class="content">
                    <h3>V de Vingança</h3>
                    <div class="price">Vol. 1 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-15.png" alt="">
                </div>
                <div class="content">
                    <h3>O Paciente</h3>
                    <div class="price">Vol. 1</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-16.png" alt="">
                </div>
                <div class="content">
                    <h3>Fullmetal Alchemist</h3>
                    <div class="price">Vol. 1</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-17.png" alt="">
                </div>
                <div class="content">
                    <h3>Psicose</h3>
                    <div class="price">Vol. 1</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-18.png" alt="">
                </div>
                <div class="content">
                    <h3>Attack on titan</h3>
                    <div class="price">Vol. 1</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-19.png" alt="">
                </div>
                <div class="content">
                    <h3>Hunter x Hunter</h3>
                    <div class="price">Vol. 1</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-20.png" alt="">
                </div>
                <div class="content">
                    <h3>A arte da Guerra</h3>
                    <div class="price">Vol. 1</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- arrivals section ends -->

<!-- deal section starts  -->

<section class="deal">

    <div class="content">
        <h3>recomendação da semana</h3>
        <h1>Vinland Saga</h1>
        <p>Quando criança, Thorfinn, filho do lendário guerreiro viking Thors, vive sem saber o passado do pai, que descobriu após anos no campo de batalha algo mais valioso do que matar seus iguais, viver sua vida de paz. Ao saber os tempos de guerra de seu pai, o garoto se revolta e vai à guerra com ele, mas acaba sendo tarde demais quando reconhece o valor dele. No passado, Thors se viu obrigado a lutar na guerra entre Dinamarca e Inglaterra junto aos Jomsvikings.</p>
        <a href="#" class="btn">Ler agora</a>
    </div>

    <div class="image">
        <img src="image/deal-img.jpg" alt="">
    </div>

</section>

<!-- deal section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading"> <span>Reviews de Clientes</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <h3>Marcos A.</h3>
                <p>Melhor serviço de e-biblioteca que já tive o prazer de encontrar.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <h3>Amanda</h3>
                <p>Posso ler uma vasta biblioteca sem nenhum problema, recomendo muito. </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <h3>João</h3>
                <p>Pelo preço vale muito a pena recomendadissimo.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <h3>Bianca M</h3>
                <p>Não tem apenas livros, mas como também mangás e HQs, super recomendo.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <h3>Luiz G.</h3>
                <p>Ter a opção de poder comprar a versão fisíca me surpreendeu.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <h3>Nana L.</h3>
                <p>preço em conta e o melhor sem burocracia, amei.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>
    
</section>

<!-- reviews section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>Nosso Blog</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Bibliotecas vão acabar ?</h3>
                    <p>com a internet ter acesso a livros ficou bem mais fácil e estudo apontam...</p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>A leitura é uma arma</h3>
                    <p>Com livros aprendemos diversas coisa e com ela podemos...</p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Livros abrem a imaginação</h3>
                    <p>Livros podem ajudar a pensar em situações que na vida real não aconteceria e ...</p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Como os livros te ajudam</h3>
                    <p>A Leitura pode te ajudar a melhorar em vários campos com escrita até dicção, e com isso...</p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Paz na leitura</h3>
                    <p>Estudos apontam que quem le tem mais paciência e que tenden a ...</p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

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
            <a href="#"> <i class="fas fa-arrow-right"></i> inicio </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> populares </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> novos </a>
            <a href="biblioteca.html"> <i class="fas fa-arrow-right"></i> biblioteca </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> blogs </a>
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