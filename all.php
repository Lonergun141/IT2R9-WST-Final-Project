<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamdag Recipe</title>

    <link rel="icon" href="img/Xassets/logo3.png" />
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css" defer/>
    <link rel="stylesheet" href="css/root.css" defer/>
    <link rel="stylesheet" href="css/all.css" defer/>
  
    <!--fONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" defer/>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" defer/>
    <link rel="preconnect" href="https://fonts.googleapis.com" defer/>
    <!--ICONS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,1,0" defer/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" defer/>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" defer/>
    <!--Script-->

</head>
<body>
    
    <!--Nav------------------------------------------------->
    <nav id="myNav">
    <div class="wrapper">
            <div class="logo"> <a href="index.php"><img src="img/Xassets/logo3.png" alt="logo" /></a> </div> <input type="radio" name="slider" id="menu-btn" /> <input type="radio" name="slider" id="close-btn" />
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
                                    <li> <a href="https://snapshot.canon-asia.com/ph/article/eng/food-photography-and-styling-hacks" target="_blank">Food Photography</a> </li>
                                    <li> <a href="#">Food Vectors</a> </li>
                                    <li> <a href="#">Food Digital Art</a> </li>
                                    <li> <a href="#">Image Creator</a> </li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Recipes</header>
                                <ul class="mega-links">
                                    <li> <a href="all.html">All</a> </li>
                                    <li> <a href="#">Breakfast</a> </li>
                                    <li><a href="#">Lunch</a></li>
                                    <li><a href="#">Dinner</a></li>
                                    <li><a href="#">Snacks</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Quick Links</header>
                                <ul class="mega-links">
                                    <li> <a href="https://www.ustp.edu.ph/" target="_blank">USTP</a> </li>
                                    <li> <a href="https://www.youtube.com/@NinongRy" target="_blank">Youtube Cooking</a> </li>
                                    <li><a href="#">Website design</a></li>
                                    <li> <a href="https://github.com/Lonergun141/Web-Systems-Technologies-Final-Project.git" target="_blank">Github</a> </li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="bg-contact"> <a href="contact.php" class="main-link"><i class="fa-solid fa-address-book"></i>Contact</a> </li> <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
           
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
            </ul> <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>

    </nav>

        <section class="all-header">
            <div class="overlay-all"></div>
        </section>
    
        <div class="food-cards">
            <div class="food-card" data-category="breakfast"> <img src="img/home/classic-burg.jpg" alt="burger" />
                <div class="content">
                    <h3>Classic Burger</h3>
                    <p> loreme pasulatiddo doti laso pamiredo </p>
                    <p> Prep : 15min | Cook : 5min</p>
                    <p>View Recipe</p>
                </div>
            </div>
            <div class="food-card" data-category="lunch"> <img src="img/home/pizza.jpg" alt="pizza" />
                <div class="content">
                    <h3>Pepperoni Pizza</h3>
                    <p> loreme pasulatiddo doti laso pamiredo </p>
                    <p> Prep : 15min | Cook : 5min</p>
                    <p>View Recipe</p>
                </div>
            </div>
            <div class="food-card" data-category="dinner"> <img src="img/home/checken.jpg" alt="fired" />
                <div class="content">
                    <h3>Korean Fried Chicken</h3>
                    <p> loreme pasulatiddo doti laso pamiredo </p>
                    <p> Prep : 15min | Cook : 5min</p>
                    <p>View Recipe</p>
                </div>
            </div>
            <div class="food-card" data-category="snacks"> <img src="img/home/cakepan.jpg" alt="pan" />
                <div class="content">
                    <h3>Pan Cake</h3>
                    <p>loreme pasulatiddo doti laso pamiredo </p>
                    <p> Prep : 15min | Cook : 5min</p>
                    <p>View Recipe</p>
                </div>
            </div>
        </div>
        
        <section class="update-section">
            <div class="update-box">
                <h2>Keep Updated on Our Website</h2>
                <form> <input type="email" placeholder="Enter your email address" /> <button type="submit">Agree</button> </form>
                <p>Connect with us if you would like to receive occasional updates</p>
            </div>
        </section>
        <footer >
            <div class="info">
                <div class="con">
                    <h4>About us</h4>
                    <p> This website is the collaboration between two students for their final project in web systems and technologies. </p>
                    <ul>
                        <li>Privacy Policy</li>
                        <li>Terms and Conditions</li>
                        <li>Accessibility</li>
                        <li>Site Map</li>
                    </ul>
                </div>
                <div class="con">
                    <h4>Contact Us</h4>
                    <p>Call: +63 955 099 2502</p>
                    <p>+63 929 579 8093</p>
                    <p>Email: baltazaralph001@gmail.com</p>
                    <p>gevero530@gmail.com</p>
                    <h4>Company Address</h4>
                    <p>M. Recto Avenue</p>
                    <p>Lapasan</p>
                    <p>9000</p>
                    <p>Cagayan de Oro City</p>
                    <p>Philippines</p>
                </div>
                <div class="con">
                    <h4>Follow Us</h4>
                    <ul class="social-media-icons">
                        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                        <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                        <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                        <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <div class="rights">
                <p>©2023 Lamdag. All Rights Reserved</p>
            </div>
        </footer>

        <script src="js/nav.js" defer></script>
</body>
</html>