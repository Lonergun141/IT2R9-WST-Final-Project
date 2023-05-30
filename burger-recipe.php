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
    <!--fONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" defer>
    <!--ICONS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,1,0" defer />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" defer />
    <!--Script-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" defer />
  </head>
  <body>
    <!--Nav------------------------------------------------->
    <nav id="myNav"> <?php include 'php/navbar.php'; ?> </nav>
    <section class="page">
      <div class="recipe-page">
        <div class="recipe-img">
          <img src="img/recipe/main_img.png" loading="lazy" alt="Food Image">
        </div>
        <div class="recipe-info">
          <div class="title-pops" data-aos="fade-up">
            <h1>
              <span>Classic</span>Burger
            </h1>
          </div>
          <p id="p1"> Indulge in the irresistible allure of our Classic Burger. Sink your teeth into a toasted bun, topped with crisp lettuce, ripe tomatoes, onions, and delectable bacon mayo. A harmonious blend of flavors that exceeds expectations. </p>
          <div class="recipe-icons">
            <div>
              <i class="fas fa-clock"></i>
              <h5>prep time</h5>
              <p>15 min</p>
            </div>
            <div>
              <i class="far fa-clock"></i>
              <h5>cook time</h5>
              <p>5 min</p>
            </div>
            <div>
              <i class="fas fa-user-friends"></i>
              <h5>serving</h5>
              <p>1 serving</p>
            </div>
          </div>
          <p class="recipe-tags"> Tags : <a href="tag-template.html">breakfast</a>
            <a href="tag-template.html">Lunch</a>
            <a href="tag-template.html">Dinner</a>
            <a href="tag-template.html">Snacks</a>
          </p>
        </div>
      </div>
    </section>
    <section class="recipe-content">
      <div class="first-column">
        <h4>Instructions</h4>
        <!--STEP 1-->
        <div class="single-instruction">
          <header>
            <p>step 1</p>
            <div></div>
          </header>
          <p>Oil your grill or a cast-iron pan, and grill or sear the beef patty as well as your burger bun around 54 degrees Celsius. Cook them to your desired doneness.</p>
        </div>
        <!--STEP 2-->
        <div class="single-instruction">
          <header>
            <p>step 2</p>
            <div></div>
          </header>
          <p>Once the beef patty is ready, add onion rings on top and let it sit on the patty for a couple of minutes.</p>
        </div>
        <!--STEP 3-->
        <div class="single-instruction">
          <header>
            <p>step 3</p>
            <div></div>
          </header>
          <p>Add the lettuce next and make sure it is already washed and cleaned.</p>
        </div>
        <!--STEP 4-->
        <div class="single-instruction">
          <header>
            <p>step 4</p>
            <div></div>
          </header>
          <p>Spread the bacon mayonnaise generously on the base toasted bun.</p>
        </div>
        <!--STEP 5-->
        <div class="single-instruction">
          <header>
            <p>step 5</p>
            <div></div>
          </header>
          <p>After making your burger, serve it on a plate with your desired dips on the side. Enjoy your meal!</p>
        </div>
      </div>
      <div class="second-column">
        <div>
          <h4>Ingredients</h4>
          <p class="single-ingredient">1 pc burger bun</p>
          <p class="single-ingredient">1 pc beef patty</p>
          <p class="single-ingredient">1 pc lettuce</p>
          <p class="single-ingredient">1 cup bacon mayonnaise</p>
          <p class="single-ingredient">2 pcs onion rings</p>
        </div>
      </div>
    </section>
    <div class="title-pops" data-aos="fade-up">
      <h1>
        <span>Popular</span>Recipes
      </h1>
      <h3>What our users love to learn</h3>
    </div>
    <section class="food-cards "> <?php include 'php/food-cards.php'; ?> </section>
    <section class="update-section "> <?php include 'php/update.php'; ?> </section>
    <footer> <?php include 'php/footer.php'; ?> </footer>
    <script src="js/nav.js" defer></script>
  </body>
</html>