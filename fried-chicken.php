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
               <img src="img/recipe/fried.png" loading="lazy" alt="Food Image">
            </div>
            <div class="recipe-info">
               <div class="title-pops" data-aos="fade-up">
                  <h1>
                     <span>Korean</span>Chicken
                  </h1>
               </div>
               <p id="p1">Get ready to savor the bold and dynamic flavors of Korean cuisine with each crunchy bite—a crispy and succulent masterpiece. Tender chicken wings or drumsticks coated in a flavorful blend of spices, fried to perfection, and coated in a harmonious sauce of gochujang, soy sauce, and honey. </p>
               <div class="recipe-icons">
                  <div>
                     <i class="fas fa-clock"></i>
                     <h5>prep time</h5>
                     <p>15—20 mins</p>
                  </div>
                  <div>
                     <i class="far fa-clock"></i>
                     <h5>cook time</h5>
                     <p>25—30 mins</p>
                  </div>
                  <div>
                     <i class="fas fa-user-friends"></i>
                     <h5>serving</h5>
                     <p>4—6 servings</p>
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
               <p>Prepare the chicken: In a large bowl, combine the flour, cornstarch, salt, black pepper, garlic powder, and ginger powder. Toss the chicken wings or drumsticks in the flour mixture, ensuring they are evenly coated.</p>
            </div>
            <!--STEP 2-->
            <div class="single-instruction">
               <header>
                  <p>step 2</p>
                  <div></div>
               </header>
               <p>Fry the chicken: In a deep pot or skillet, heat vegetable oil to a temperature of around 350°F (175°C). Carefully add the coated chicken pieces in batches, frying them for about 10-12 minutes or until they turn golden brown and crispy. Transfer the cooked chicken to a paper towel-lined plate to drain excess oil.</p>
            </div>
            <!--STEP 3-->
            <div class="single-instruction">
               <header>
                  <p>step 3</p>
                  <div></div>
               </header>
               <p>Make the sauce: In a separate saucepan, combine the gochujang, soy sauce, honey (or brown sugar), and rice vinegar. Cook over medium heat, stirring constantly, until the sauce thickens and becomes glossy.</p>
            </div>
            <!--STEP 4-->
            <div class="single-instruction">
               <header>
                  <p>step 4</p>
                  <div></div>
               </header>
               <p>Coat the chicken in sauce: Place the fried chicken in a large bowl and pour the prepared sauce over it. Toss the chicken gently to ensure it is evenly coated with the sauce.</p>
            </div>
            <!--STEP 5-->
            <div class="single-instruction">
               <header>
                  <p>step 5</p>
                  <div></div>
               </header>
               <p>Serve and garnish: Transfer the Korean Fried Chicken to a serving platter and garnish with sesame seeds and chopped green onions, if desired. Serve it hot and enjoy the crispy, flavorful delight of Korean Fried Chicken!</p>
            </div>
         </div>
         <div class="second-column">
            <div>
               <h4>Ingredients</h4>
               <p class="single-ingredient">2 pounds of chicken wings/drumsticks</p>
               <p class="single-ingredient">1 cup of all-purpose flour</p>
               <p class="single-ingredient">1 cup of cornstarch</p>
               <p class="single-ingredient">1 teaspoon of salt</p>
               <p class="single-ingredient">1/2 teaspoon of black pepper</p>
               <p class="single-ingredient">1/2 teaspoon of garlic powder</p>
               <p class="single-ingredient">1/2 teaspoon of ginger powder</p>
               <p class="single-ingredient">1/2 cup of gochujang (Korean red pepper paste)</p>
               <p class="single-ingredient">1/4 cup of soy sauce</p>
               <p class="single-ingredient">1/4 cup of honey or brown sugar</p>
               <p class="single-ingredient">2 tablespoons of rice vinegar</p>
               <p class="single-ingredient">Vegetable oil for frying</p>
               <p class="single-ingredient">Optional garnish: sesame seeds, chopped green onions</p>
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