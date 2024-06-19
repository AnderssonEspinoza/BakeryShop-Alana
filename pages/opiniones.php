<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <title>Reviews</title>
</head>

<body class="body body-2 body-opiniones">
    <div class="container container-layaout-2 ">
        <nav class="menu-nav navegacion">
            <!-- Logo -->
            <div class="home-logo">
                <a href="index.php">
                    <img src="../assets/images/Logo-panadera.png"
                        alt="logo coffee" class="img-logo">
                </a>
                <span>
                    <a href="../index.php"> Pasteleria Alana</a>
                </span>
            </div>
            <!-- Logo -->

            <!------------ Navigation menu ----------->
            <!-- Icon Menu-bar responsive -->
            <label for="menu" class="nav-label">
                <img src="../assets/icons/menu.svg" alt="bar icon" class="nav-img">
            </label>
            <input type="checkbox" id="menu" class="nav-input">
            <!-- ----------------------- -->

            <div class="nav__list">
                <a href="../index.php">Home</a>
                <a href="productos.html">Productos</a>
                <a href="sobre_nosotros.html">Sobre Nosotros</a>
                <a href="opiniones.php">Opiniones</a>
                <a href="contactos.php">Contactos</a>
                <a href="login-in.html">Login</a>
            </div>
            <!-- ------------------------------------------ -->
            <div class="shop-register">
                <a href="#" class="icon-shop">
                    <img src="../assets/images/shopping-cart-svgrepo-com (2).svg" alt="" srcset="">
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

        <main class=" main main-productos main-reviews">
            <div class="products reviews">

                <div class="review-persons">
                    <div class="container_img_person-name-stars">
                        <div class="person-name-stars">
                            <img class="person" src=" ../assets/images/pic-1.png" alt="">                        
                            <div class="name-stars">
                                <h3>Edwin Smith</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        
                        <img src="../assets/images/google.svg" alt="icon google" class="icon_google">
                       
                    </div>
                    
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus libero, harum est culpa
                        aperiam eligendi, modi impedit, veritatis a nesciunt incidunt. Adipisci nulla cumque!
                    </p>
                    
                </div>

                <div class="review-persons">
                    <div class="container_img_person-name-stars">
                        <div class="person-name-stars">
                            <img class="person" src=" ../assets/images/pic-2.png" alt="">                        
                            <div class="name-stars">
                                <h3>Edwin Smith</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        
                        <img src="../assets/images/google.svg" alt="icon google" class="icon_google">
                       
                    </div>
                    
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus libero, harum est culpa
                        aperiam eligendi, modi impedit, veritatis a nesciunt incidunt. Adipisci nulla cumque!
                    </p>
                    
                </div>
                <div class="review-persons">
                    <div class="container_img_person-name-stars">
                        <div class="person-name-stars">
                            <img class="person" src=" ../assets/images/pic-3.png" alt="">                        
                            <div class="name-stars">
                                <h3>Edwin Smith</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        
                        <img src="../assets/images/google.svg" alt="icon google" class="icon_google">
                       
                    </div>
                    
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus libero, harum est culpa
                        aperiam eligendi, modi impedit, veritatis a nesciunt incidunt. Adipisci nulla cumque!
                    </p>
                    
                </div>
                <div class="review-persons">
                    <div class="container_img_person-name-stars">
                        <div class="person-name-stars">
                            <img class="person" src=" ../assets/images/pic-4.png" alt="">                        
                            <div class="name-stars">
                                <h3>Edwin Smith</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        
                        <img src="../assets/images/google.svg" alt="icon google" class="icon_google">
                       
                    </div>
                    
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus libero, harum est culpa
                        aperiam eligendi, modi impedit, veritatis a nesciunt incidunt. Adipisci nulla cumque!
                    </p>
                    
                </div>

            </div>

        </main>
        <!------- Inicio del footer--------- -->
        <footer class="footer footer-2">
            <p class="footer-copyr">
                © Todos los derechos reservados 2021-2030
            </p>
            
        </footer>
    </div>

    <script src="../JS/script.js"></script>

</body>

</html>