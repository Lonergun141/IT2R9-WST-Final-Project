<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lamdag</title>
    <link rel="icon" href="img/Xassets/logo3.png" />
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/root.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <!--fONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--ICONS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,1,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!--Script-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
                <li id="bg-contact"> <a href="contact.php" class="main-link"><i class="fa-solid fa-address-book"></i>Contact</a>
                </li> <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label> <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
            </ul> <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>

    <section class="hero-contact">
        <div class="text-contact">
            <h1>CONTACT US</h1>
            <p>We would like to hear your thoughts about us</p>
        </div>
    </section>
    <section class="contact-form">
        <div class="left-contact">
            <h1>Love to hear from you, send us your thoughts</h1>
            <form>
                <label for="Fname">First Name</label>
                <input type="text" id="Fname" name="Fname" />
                <label for="Lname">Last Name</label>
                <input type="text" id="Lname" name="Lname" />
                <label for="Lname">Email Address</label>
                <input type="email" id="email" name="email" />
                <label for="message">Message</label>
                <textarea id="message" rows="10" name="message">
                </textarea> <button type="submit">Submit</button>
            </form>
        </div>
        <div class="right-contact">
            <h2>Frequently Asked Questions (FAQs) for our Food Recipe Website
            </h2>
            <ol>
                <li>How do I search for recipes on the site?(Working on it)</li>
                <li> Can I filter the recipes by dietary restrictions or
                    ingredients?(nope, maybe in the future) </li>
                <li> Are the recipes tested and approved by a chef or
                    nutritionist?(maybe, these recipes came from other sources)
                </li>
                <li> How do I save my favorite recipes to come back to
                    later?(feature not yet added) </li>
                <li> Can I submit my own recipes to the website?(Contact us
                    through email) </li>
                <li> Are there any video tutorials or step-by-step guides for
                    the recipes?(we will add it on the future) </li>
                <li> How can I leave feedback or reviews on a recipe?(feature
                    not yet added) </li>
                <li>Can I adjust the serving size of a recipe?(no?)</li>
                <li> Can I print out the recipes to use in my kitchen?(feature
                    not yet added) </li>
                <li> Are there variations or substitutions listed for
                    ingredients in the recipes?(nope.) </li>
            </ol>
        </div>
    </section>
    <section class="update-section">
        <?php include 'php/update.php'; ?>
    </section>
    <footer>
        <?php include 'php/footer.php'; ?>
    </footer>
    <script src="js/nav.js"></script>
    <script src="send-email"></script>
</body>

</html>