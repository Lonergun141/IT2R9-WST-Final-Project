<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lamdag Recipes</title>
    <link rel="icon" href="img/Xassets/logo3.png" />
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css" defer />
    <link rel="stylesheet" href="css/root.css" defer />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" defer />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" defer>
    <!--fONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" defer>
    <!--ICONS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,1,0" defer />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" defer />
    <!--Script-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" defer />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <!--Nav------------------------------------------------->
    <nav id="myNav">
        <div class="wrapper">
            <div class="logo"> <a href="index.php"><img src="img/Xassets/logo3.png" alt="logo" /></a> </div>
            <input type="radio" name="slider" id="menu-btn" /> <input type="radio" name="slider" id="close-btn" />
            <ul class="nav-links" id="myNavLinks">
                <li> <a href="index.php" class="main-link"><i class="fa-solid fa-house-chimney"></i>Home</a>
                </li>
                <li> <a href="About.php" class="main-link"><i class="fa-solid fa-address-card"></i>About</a>
                </li>
                <li> <a href="#" class="desktop-item main-link"><i class="fa-solid fa-compass"></i>Explore</a>
                    <input type="checkbox" id="showMega" /> <label for="showMega" id="scroll-label" class="mobile-item main-link"><i class="fa-solid fa-compass"></i>Explore</label>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row"> <img src="img/Xassets/asian.jpg" alt="logo" /> </div>
                            <div class="row">
                                <header>Discover Hobbies</header>
                                <ul class="mega-links">
                                    <li> <a href="https://snapshot.canon-asia.com/ph/article/eng/food-photography-and-styling-hacks" target="_blank">Food Photography</a> </li>
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
                                    <li> <a href="https://www.youtube.com/@NinongRy" target="_blank">Youtube
                                            Cooking</a> </li>
                                    <li><a href="#">Website design</a></li>
                                    <li> <a href="https://github.com/Lonergun141/Web-Systems-Technologies-Final-Project.git" target="_blank">Github</a> </li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="bg-contact"> <a href="contact.php" class="main-link"><i class="fa-solid fa-address-book"></i>Contact</a> </li> <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label> <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
            </ul> <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>

    <!--Hero Section------------------------------------------>
    <section class="hero">
        <div class="carousel">
            <div class="overlay"></div> <img src="img/home/hero-bg-2.jpg" loading="lazy" alt="hero" />
        </div>
        <div class="hero-content ">
            <h1>Craving Food?</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, praesentium! Porro eligendi
                consequatur sapiente repellendus sed et, odit illum sunt atque obcaecati voluptatibus
                molestiae dicta facere nemo itaque, blanditiis cupiditate!</p> <a href="#" class="btn">Learn
                More</a>
        </div>
        <div class="hero-image "> </div>
    </section>
    <!--Search Section--------------------------->
    <div class="search-container" data-aos="fade-up">
        <h1>Explore Now</h1> <input type="text" id="search-input" placeholder="Search..." />
    </div>
    <!--Category Section-------------------------------------->
    <div class="category-buttons " data-aos-anchor-placement="top-bottom" data-aos="fade-up"> <button class="category-button active" data-category="all">All</button> <button class="category-button" data-category="breakfast"> Breakfast </button> <button class="category-button" data-category="lunch">Lunch</button> <button class="category-button" data-category="dinner">Dinner</button> <button class="category-button" data-category="snacks">Snacks</button> </div>
    <!--Food card Section-------------------------------------->
    <section class="food-cards "> <?php include 'php/food-cards.php'; ?> </section>
    <!--offers-->
    <section class="offer-section">
        <div class="offer-challenge">
            <h1><span>Heads</span>Up</h1>
            <h3>Are you Ready to take the challenge?</h3>
        </div>
        <div class="offer-card" data-aos="fade-up"> <i class='bx bxs-book-content'></i>
            <h1>Best Recipes</h1>
            <p>Discover delicious and easy-to-follow recipes that will impress even the pickiest eaters. From
                savory main dishes to sweet treats, our collection has something for everyone.</p>
        </div>
        <div class="offer-card" data-aos="fade-up"> <i class='bx bx-universal-access'></i>
            <h1>Beginner Friendly</h1>
            <p>New to cooking? No problem! Our beginner-friendly recipes are designed with you in mind.
                Step-by-step instructions and minimal prep time make it easy to create meals that taste like
                they were made by a pro.</p>
        </div>
        <div class="offer-card" data-aos="fade-up"> <i class='bx bx-health'></i>
            <h1>Healthy Options</h1>
            <p>Eating healthy doesn't have to be boring. Our selection of healthy recipes includes nutritious
                options that don't compromise on flavor. From low-carb to vegetarian-friendly dishes, we've
                got you covered.</p>
        </div>
    </section>
    <!--About-->

    <section class="about " data-aos="fade-up"> <?php include 'php/about-section.php'; ?> </section>
    <div class="title-pops" data-aos="fade-up">
        <h1><span>Popular</span>Recipes</h1>
        <h3>What our users love to learn</h3>
    </div>
    <section class="popular-recipe" data-aos="fade-up">
        <?php include 'php/food-cards.php'; ?> 
    </section>
    <div class="title-header" data-aos="fade-up">
        <h1><span>Customer</span>Reviews</h1>
        <h3>What They Say About Us</h3>
    </div>
    <section class="test-container" data-aos="fade-up"> <?php include 'php/testimonial.php'; ?> </section>
    <!--Update Section-------------------------------------->
    <section class="update-section"> <?php include 'php/update.php'; ?> </section>
    <footer> <?php include 'php/footer.php'; ?> </footer>

    <script src="js/nav.js" defer></script>
    <script src="js/home.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" defer></script>
    <script src="js/reviews.js" defer></script>
    <script>
        AOS.init();
    </script>
</body>

</html>