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
    <?php include 'php/navbar.php'; ?>
    </nav>

        <section class="all-header">
        <div class="search-container" data-aos="fade-up">
         <input type="text" id="search-input" placeholder="Search..." />

       
    </div>
    <div class="category-buttons " data-aos-anchor-placement="top-bottom" data-aos="fade-up"> 
        <button class="category-button active" data-category="all">All</button> 
        <button class="category-button" data-category="breakfast"> Breakfast </button> 
        <button class="category-button" data-category="lunch">Lunch</button> 
        <button class="category-button" data-category="dinner">Dinner</button> 
        <button class="category-button" data-category="snacks">Snacks</button> 
    </div>
        </section>
    
        <section class="food-cards "> <?php include 'php/food-cards.php'; ?> </section>
        
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
        <script src="js/home.js" defer></script>

</body>
</html>