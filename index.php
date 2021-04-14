<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place - Huacal</title>
    <link rel="stylesheet" href="style.css">   
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;0,600;1,600;1,700&display=swap" rel="stylesheet">    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">
</head>
<body>

<!-- Menu principal -->

<header class="header" >
    <div class="user-menu">
        <div class="bar-user-menu" id="barUserMenu">
            <a href="#">Iniciar Sesión</a>
            <!-- <img src="images/unnamed.jpg" alt="user">
            <a href="#">user</a> -->
        </div>
        <!-- <div class="options-menu-user">
            <ul>
                <li><span class="linearicons-user"></span><a href=""> Perfil</a></li>
                <li><span class="linearicons-cog"></span><a href="">Settings</a></li>
                <li><span class="linearicons-exit"></span><a href="">Log out</a></li>
            </ul>
        </div> -->
    </div>
    <div class="menu">
        <a href="#" class="logo-desktop"><img src="images/kyoto-metro-logo.svg" alt="logo-blog"></a>
        <a class="text-logo" href="#">Larry Martinez</a>
        <div class="main-menu-bar">
            <div class="icon-menu-mobile"><a href="#" class="btn-menu-mobile " id="btnMenuMobile"><img src="images/menu-btn.svg" alt="hamburger menu"></a></div>
            <nav class="menu-navigation" id="menuNavigation">
                <a href="#">Inicio</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
                <a href="#">Blog</a>

                <a href="#" class="btn-call-to-action" id="btnCallToAction">Llamar</a>
            </nav>
        </div>
    </div>
</header>

<section class="banner-main">
    <div class="banner">
        <div class="image-banner">
            <img src="images/american-staffordshire-terrier.png" alt="Pitbull">
        </div>
        <div class="text-banner">
        <h1>Beutiful American Staffordshire Terrier <span>Colombian Park.</span></h1>
        </div>
    </div>
</section>

<section class="introduction-text">
    <div class="circles-plus">
        <div class="circle-one">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <span>10 Años</span>
            <a href="#">Ver mas</a>
        </div>

        <div class="circle-one">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <span>10 Años</span>
            <a href="#">Ver mas</a>
        </div>

        <div class="circle-one">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <span>10 Años</span>
            <a href="#">Ver mas</a>
        </div>

    </div>
    <div class="text-container-introduction">
        <div class="text-intro">
            <h2>Lorem, ipsum dolor.</h2>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolor iusto in officiis assumenda ad nisi autem voluptatem perferendis? Accusamus?</p>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur magni impedit alias debitis iure! Sint accusantium vero laudantium, ratione consequuntur id ullam repellat, eos illo quibusdam dolorem odit recusandae libero, laborum quisquam magnam amet impedit pariatur odio. Dolores ratione rem reiciendis officiis? Adipisci, in? Error, enim! Eum quo voluptatem eaque? Quam deserunt non illum voluptas, maiores impedit nobis inventore explicabo ab porro deleniti harum earum magni nisi officiis labore odio asperiores placeat! Fugiat ea atque autem eveniet, officiis adipisci, deserunt quam praesentium placeat quas aliquid minima aliquam? Omnis, delectus inventore facilis modi quasi beatae quae consectetur repellendus libero id asperiores?</p>
            <br><br>
            <img src="images/pitbull-2.jpg" alt="Pitbull terrier">
        </div>
    </div>
</section>
<div class="margin-top-100"></div>
<section class="form-contact">
    <div class="colored-dark"></div>
    <div class="image-form-header">
        <img src="images/image-form-contact.jpg" alt="Title information">
    </div>
    <form action="envio.php" method="post">
        <input type="text" name="name" id="name" placeholder="Nombres">
        <input type="text" name="subname" id="subname" placeholder="Apellidos">
        <input type="email" name="email" id="email" placeholder="Correo Electrónico">
        <input type="text" name="phone" id="phone" placeholder="Número telefónico">
        <textarea name="message" id="message" placeholder="Mensaje..."></textarea>
        <input type="checkbox" name="igree" id="iGree"><label for="igree">Aceptas los Términos y Condiciones</label>
        <input type="submit" id="enviar" value="Enviar">
    </form>
</section>



<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/functions.js"></script>
</body>
</html>
