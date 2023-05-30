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
               <img src="img/recipe/pizza.png" loading="lazy" alt="Food Image">
            </div>
            <div class="recipe-info">
               <div class="title-pops" data-aos="fade-up">
                  <h1>
                     <span>Pepperoni</span>Pizza
                  </h1>
               </div>
               <p id="p1">Experience the irresistible delight of pepperoni pizza today. A symphony of flavors with a crispy crust, tangy tomato sauce, melted mozzarella, and savory pepperoni. Beloved worldwide, this classic favorite brings people together, leaving an unforgettable impression that keeps you craving more. </p>
               <div class="recipe-icons">
                  <div>
                     <i class="fas fa-clock"></i>
                     <h5>prep time</h5>
                     <p>15—20 mins</p>
                  </div>
                  <div>
                     <i class="far fa-clock"></i>
                     <h5>cook time</h5>
                     <p>12—15 mins</p>
                  </div>
                  <div>
                     <i class="fas fa-user-friends"></i>
                     <h5>serving</h5>
                     <p>8 servings</p>
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
               <p>Preheat the oven: Preheat your oven to 450°F (230°C) or according to the instructions on the pizza dough package.</p>
            </div>
            <!--STEP 2-->
            <div class="single-instruction">
               <header>
                  <p>step 2</p>
                  <div></div>
               </header>
               <p>Prepare the dough: If using store-bought dough, follow the instructions on the package to prepare it. If making homemade dough, roll it out on a lightly floured surface to your desired thickness and shape.</p>
            </div>
            <!--STEP 3-->
            <div class="single-instruction">
               <header>
                  <p>step 3</p>
                  <div></div>
               </header>
               <p>Assemble the pizza: Place the rolled-out dough on a pizza stone or baking sheet. Spread a layer of tomato sauce evenly over the dough, leaving a small border around the edges. Sprinkle the shredded mozzarella cheese over the sauce, and then arrange the pepperoni slices on top.</p>
            </div>
            <!--STEP 4-->
            <div class="single-instruction">
               <header>
                  <p>step 4</p>
                  <div></div>
               </header>
               <p>Bake the pizza: Drizzle a small amount of olive oil over the pizza. Carefully transfer the pizza to the preheated oven and bake for about 12-15 minutes, or until the crust is golden brown and the cheese is bubbly and slightly browned.</p>
            </div>
            <!--STEP 5-->
            <div class="single-instruction">
               <header>
                  <p>step 5</p>
                  <div></div>
               </header>
               <p>Serve and enjoy: Remove the pizza from the oven and let it cool for a minute or two. Slice it into wedges or squares and serve hot. Enjoy your delicious pepperoni pizza!</p>
            </div>
         </div>
         <div class="second-column">
            <div>
               <h4>Ingredients</h4>
               <p class="single-ingredient">1 pizza dough</p>
               <p class="single-ingredient">1 cup tomato sauce</p>
               <p class="single-ingredient">1 cup pepperoni slices</p>
               <p class="single-ingredient">2 cups mozarella cheese, shredded</p>
               <p class="single-ingredient">1 tbsp olive oil</p>
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