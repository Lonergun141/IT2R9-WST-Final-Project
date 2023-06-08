<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Lamdag Recipes</title>
      <link rel="icon" href="../img/Xassets/logo3.png" />
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
      <nav id="myNav"> <?php include 'php/navbar.php'; ?> </nav>
      
      <!--Hero Section------------------------------------------>
      <section class="hero-section">
        <div class="hero-1">
            <h1>Lamdag Recipes</h1>
            <p>Indulge in the world of culinary delights with Lamdag Recipes, your go-to destination for mouthwatering recipes that will tantalize your taste buds. Whether you're an aspiring home cook or a seasoned chef, 
                our website is designed to ignite your passion for cooking and take your culinary skills to new heights.</p>
                  <a href="About.php" class="butn">Learn More</a>
        </div>
        <div class="hero-2">
            <div class="sub-hero-1">
                <h1>
                    Delicious Food for<span>
                    Everybody</span>
                 </h1>
            </div>
            <div class="sub-hero-2">
              <i class="fa-solid fa-quote-left"></i>
              <p>Indulge in the world of culinary delights with Lamdag Recipes, your go-to destination for mouthwatering recipes that will tantalize your taste buds. Whether you're an aspiring home cook or a seasoned chef, 
                our website is designed to ignite your passion for cooking and take your culinary skills to new heights.</p>
                <a href="About.php" class="butn">Learn More</a>
            
            </div>
        </div>
        <div class="hero-3 swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="img/recipe/bread.jpg" loading="lazy" alt="Image 1" />
              </div>
              <div class="swiper-slide">
                <img src="img/home/classic-burg.jpg" loading="lazy" alt="Image 2" />
              </div>
              <div class="swiper-slide">
                <img src="img/recipe/mac.jpg" loading="lazy" alt="Image 3" />
              </div>
            </div>
          </div>
    </section>
      <!--Search Section--------------------------->
      <div class="search-container" data-aos="fade-up">
         <h1>Explore Now</h1>
         <input type="text" id="search-input" placeholder="Search..." />
      </div>
      <!--Category Section-------------------------------------->
      <div class="category-buttons " data-aos-anchor-placement="top-bottom" data-aos="fade-up">
         <button class="category-button active" data-category="all">All</button>
         <button class="category-button" data-category="breakfast"> Breakfast </button>
         <button class="category-button" data-category="lunch">Lunch</button>
         <button class="category-button" data-category="dinner">Dinner</button>
         <button class="category-button" data-category="snacks">Snacks</button>
      </div>
      <!--Food card Section-------------------------------------->
      <section class="food-cards " data-aos="fade-up"> <?php include 'php/food-cards.php'; ?> </section>
      <!--offers-->
      <section class="offer-section" data-aos="fade-up">  <?php include 'php/offers.php'; ?>  </section>
      <!--About-->
      <section class="about " data-aos="fade-up"> <?php include 'php/about-section.php'; ?> </section>
      <div class="title-pops" data-aos="fade-up">
         <h1>
            <span>Popular</span>Recipes
         </h1>
         <h3>What our users love to learn</h3>
      </div>
      <section class="popular-recipe" data-aos="fade-up"> <?php include 'php/food-cards.php'; ?> </section>
      <div class="title-header" data-aos="fade-up">
         <h1>
            <span>Customer</span>Reviews
         </h1>
         <h3>What They Say About Us</h3>
      </div>
      <section class="test-container"> <?php include 'php/testimonial.php'; ?> </section>
      <!--Update Section-------------------------------------->
      <section class="update-section"> <?php include 'php/update.php'; ?> </section>
      <footer> <?php include 'php/footer.php'; ?> </footer>
      <script src="js/nav.js" defer></script>
      <script src="js/home.js" defer></script>
      <script src="js/authetication.js" defer></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" defer></script>
      <script src="js/reviews.js" defer></script>
      <script>
         AOS.init();
         document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".hero-3", {
          loop: true, // Enable continuous loop
          autoplay: {
            delay: 3000, // Delay between slides in milliseconds
          },
        });
      });
      </script>
   </body>
</html>