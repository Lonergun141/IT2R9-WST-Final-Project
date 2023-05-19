<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamdag</title>
    <link rel="icon" href="img/Xassets/logo3.png" />
    <!--CSS-->
    <link rel="stylesheet" href="css/about.css" defer />
    <link rel="stylesheet" href="css/style.css" defer />
    <link rel="stylesheet" href="css/root.css" defer />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" defer />
    <!--fONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" defer>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" defer>
    <!--ICONS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,1,0" defer />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" defer />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" defer />
    <!--Script-->

</head>

<body>
    <!--Nav------------------------------------------------->
    <nav id="myNav">
        <div class="wrapper">
            <div class="logo"> <a href="index.php"><img src="img/Xassets/logo3.png" alt="logo" /></a> </div>
            <input type="radio" name="slider" id="menu-btn" /> <input type="radio" name="slider" id="close-btn" />
            <ul class="nav-links" id="myNavLinks">
                <li> <a href="index.php" class="main-link"><i class="fa-solid fa-house-chimney"></i>Home</a> </li>
                <li> <a href="About.php" class="main-link"><i class="fa-solid fa-address-card"></i>About</a> </li>
                <li> <a href="#" class="desktop-item main-link"><i class="fa-solid fa-compass"></i>Explore</a> <input type="checkbox" id="showMega" />
                    <label for="showMega" id="scroll-label" class="mobile-item main-link"><i class="fa-solid fa-compass"></i>Explore</label>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row"> <img src="img/Xassets/asian.jpg" alt="logo" /> </div>
                            <div class="row">
                                <header>Discover Hobbies</header>
                                <ul class="mega-links">
                                    <li> <a href="https://snapshot.canon-asia.com/ph/article/eng/food-photography-and-styling-hacks" target="_blank">Food Photography</a>
                                    </li>
                                    <li> <a href="#">Food Vectors</a> </li>
                                    <li> <a href="#">Food Digital Art</a> </li>
                                    <li> <a href="#">Image Creator</a> </li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Recipes</header>
                                <ul class="mega-links">
                                    <li> <a href="all.php">All</a> </li>
                                    <li> <a href="burger-recipe.php">Breakfast</a> </li>
                                    <li><a href="#">Lunch</a></li>
                                    <li><a href="#">Dinner</a></li>
                                    <li><a href="#">Snacks</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Quick Links</header>
                                <ul class="mega-links">
                                    <li> <a href="https://www.ustp.edu.ph/" target="_blank">USTP</a> </li>
                                    <li> <a href="https://www.youtube.com/@NinongRy" target="_blank">Youtube Cooking</a>
                                    </li>
                                    <li><a href="#">Website design</a></li>
                                    <li> <a href="https://github.com/Lonergun141/Web-Systems-Technologies-Final-Project.git" target="_blank">Github</a> </li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="bg-contact"> <a href="contact.php" class="main-link"><i class="fa-solid fa-address-book"></i>Contact</a>
                </li> <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>

                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
            </ul> <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>

    </nav>


    <section class="hero-image reveal-hidden-left">
        <div class="hero-text reveal-hidden-right">
            <div class="overlay"></div>
            <h1>We are Lamdag</h1>
            <p>lamdag [lam. dag.] : shining (adj.) Synonyms: landag.</p>
        </div>
    </section>

    <section class="about">
        <?php include 'php/about-section.php'; ?>

    </section>

    <div class="title-header reveal-hidden-left">
        <h1><span>Customer</span>Reviews</h1>
        <h3>What They Say About Us</h3>
    </div>
    <section class="test-container reveal-hidden-right">
        <?php include 'php/testimonial.php'; ?>
    </section>

    <section class="Awk reveal-hidden-right">
        <h1>Acknowledgements</h1>
        <p>We would like to express our gratitude towards USTP, Mr. Alex Simon
            Dacer and our fellow classmates for their invaluable contribution in
            building our food recipe website. Without their help and support,
            this project would not have been possible.</p>
    </section>
    <div class="section-header reveal-hidden-left">
        <h1>Developers</h1>
    </div>
    <section class="row-dev">
        <div class="column-dev">
            <div class="card"> <img src="img/About/jean.png" alt="Jane">
                <div class="container-dev">
                    <h2>Jean-Alph Baltazar</h2>
                    <p class="title">Student Developer</p>
                    <p>+63 955 099 2502</p>
                    <p>baltazaralph001@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="column-dev">
            <div class="card"> <img src="img/About/clyde.jpg" alt="Mike">
                <div class="container-dev">
                    <h2>Clyde Gevero</h2>
                    <p class="title">Student Art Director</p>
                    <p>+63 929 579 8093</p>
                    <p>gevero530@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
    <section class="update-section">
        <?php include 'php/update.php'; ?>
    </section>
    <footer>
        <?php include 'php/footer.php'; ?>
    </footer>
    <script src="js/nav.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" defer></script>
    <script src="js/reviews.js" defer></script>

</body>

</html>