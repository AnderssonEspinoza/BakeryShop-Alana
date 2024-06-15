<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:wght@300;500&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Dolce Coffee</title>
</head>

<body class="body body-home">

    <div class="container container-home">



        <!-- Background-image-2 -->
        <div class="bgimg-2">
            <img src="assets/images/Logo-panadera.png" alt="" class="img-home-2">
        </div>
        <!-- ------------------ -->

        <!------------------- Inicio del header -------------------->

        <nav class="menu-nav">
            <!-- Logo -->
            <div class="home-logo">
                <a href="index.html">
                    <img src="assets/images/Logo-panadera.png"
                        alt="logo coffee" class="img-logo">
                </a>
                <span>
                    <a href="index.html"> Pasteleria Alana</a>
                </span>
            </div>
            <!-- Logo -->

            <!------------ Navigation menu ----------->
            <!-- Icon Menu-bar responsive -->
            <label for="menu" class="nav-label">
                <img src="assets/icons/menu.svg" alt="bar icon" class="nav-img">
            </label>
            <input type="checkbox" id="menu" class="nav-input">
            <!-- ----------------------- -->

            <div class="nav__list">
                <a href="index.html">Home</a>
                <a href="pages/productos.html">Productos</a>
                <a href="pages/sobre_nosotros.html">Sobre Nosotros</a>
                <a href="pages/opiniones.html">Opiniones</a>
                <a href="pages/contactos.html">Contactos</a>
                <a href="pages/welcome.html">Login</a>
            </div>
            <!-- ------------------------------------------ -->
            <div class="shop-register">
                <a href="#" class="icon-shop">
                    <img src="assets/images/shopping-cart-svgrepo-com (2).svg" alt="" srcset="">
                </a>
                <?php
                session_start();
                if (isset($_SESSION['user'])) {
                echo '<span class="user-name">' . $_SESSION['user'] . '</span>';
                } else {
                echo '<a href="pages/welcome.html" class="icon-register">
                        <img src="assets/images/user-3-svgrepo-com.svg" alt="" srcset="">
                      </a>';
                }
                ?>
            </div>
        </nav>
        <!--------------------- Fin del header -------------------------->


        <!-------- Inicio del main ----------->
        <main class="main-home">
            <div class="title-description-home">
                <h1 class="name-bakeryshop">
                    Dulces momentos, dulces recuerdos
                </h1>
                <p class="description-home">
                    Descubre un mundo de sabores exquisitos y texturas delicadas en cada uno de nuestros productos horneados con esmero y dedicación
                </p>
                <div class="order">
                    <a href="pages/productos.html">
                        <button type="button" class="order-button">
                            Ordenar Ahora
                        </button>
                    </a>
                </div>
                <div class="r-socials">

                    <a href="#" class="f-icon">
                        <img src="assets/images/facebook.svg" alt="" srcset="" class="icon-fb icon">
                    </a>
                    <a href="#" class="ig-icon">
                        <img src="assets/images/Instagram_light.svg" alt="" srcset="" class="icon-ig icon">
                    </a>
                    <a href="#" class="tw-icon">
                        <img src="assets/images/twitter.svg" alt="" srcset="" class="icon-tw icon">
                    </a>
                </div>
            </div>
        </main>
        <!----------- Fin del main ---------->
        <div class="icons-rsocials">
            <div >             
                <!-- image -->
                <img class="img-home" src="assets/images/torta3-home.png" alt="taza de cafe">
                <!-- ------------------- -->
            </div>
            
        </div>

        <!------- Inicio del footer--------- -->
        <footer class="footer">
            <p class="footer-copyr">
                © Todos los derechos reservados 2024-2030
            </p>
        </footer>
        <!------------- Fin del footer  ----------->
    </div>
</body>

</html>