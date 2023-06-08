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
               <img src="img/recipe/mac.png" loading="lazy" alt="Food Image">
            </div>
            <div class="recipe-info">
               <div class="title-pops" data-aos="fade-up">
                  <h1>
                     <span>Cheese</span>and Mac
                  </h1>
               </div>
               <p id="p1">Mac and Cheese is a beloved comfort food dish that combines tender macaroni pasta with a creamy and cheesy sauce. 
                It's a satisfying and flavorful meal that can be enjoyed on its own or as a side dish.</p>
               <div class="recipe-icons">
                  <div>
                     <i class="fas fa-clock"></i>
                     <h5>prep time</h5>
                     <p>5—10 mins</p>
                  </div>
                  <div>
                     <i class="far fa-clock"></i>
                     <h5>cook time</h5>
                     <p>5—8 mins</p>
                  </div>
                  <div>
                     <i class="fas fa-user-friends"></i>
                     <h5>serving</h5>
                     <p>1—2 servings</p>
                  </div>
               </div>
               <p class="recipe-tags"> Tags : <a href="tag-template.html">breakfast</a>
                  <a href="tag-template.html">Breakfast</a>
                  <a href="tag-template.html">Snack</a>
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
               <p>Cook the elbow macaroni according to the package instructions until al dente. Drain and set aside.</p>
            </div>
            <!--STEP 2-->
            <div class="single-instruction">
               <header>
                  <p>step 2</p>
                  <div></div>
               </header>
               <p>In a large saucepan, melt the butter over medium heat. Add the flour and whisk continuously for about 1-2 minutes to make a roux.</p>
            </div>
            <!--STEP 3-->
            <div class="single-instruction">
               <header>
                  <p>step 3</p>
                  <div></div>
               </header>
               <p>Slowly pour in the milk while whisking constantly to avoid lumps. Continue whisking until the mixture thickens and comes to a simmer.</p>
            </div>
            <!--STEP 4-->
            <div class="single-instruction">
               <header>
                  <p>step 4</p>
                  <div></div>
               </header>
               <p>Reduce the heat to low and add the shredded cheddar cheese to the sauce. Stir until the cheese is melted and the sauce is smooth.</p>
            </div>
            <!--STEP 5-->
            <div class="single-instruction">
               <header>
                  <p>step 5</p>
                  <div></div>
               </header>
               <p>Add the mustard powder, garlic powder, salt, and pepper. Stir to combine.</p>
            </div>
               <!--STEP 6-->
               <div class="single-instruction">
               <header>
                  <p>step 6</p>
                  <div></div>
               </header>
               <p>Remove the sauce from heat and pour it over the cooked macaroni. Stir well to coat the pasta evenly with the cheese sauce.</p>
            </div>
              <!--STEP 7-->
              <div class="single-instruction">
               <header>
                  <p>step 7</p>
                  <div></div>
               </header>
               <p>Taste and adjust the seasoning if needed.</p>
            </div>
              <!--STEP 8-->
              <div class="single-instruction">
               <header>
                  <p>step 8</p>
                  <div></div>
               </header>
               <p>Serve the mac and cheese hot and enjoy the creamy, cheesy goodness.</p>
            </div>
         </div>
         <div class="second-column">
            <div>
               <h4>Ingredients</h4>
               <p class="single-ingredient">8 ounces elbow macaroni</p>
               <p class="single-ingredient">2 tablespoons unsalted butter</p>
               <p class="single-ingredient">2 tablespoons all-purpose flour</p>
               <p class="single-ingredient">2 cups milk</p>
               <p class="single-ingredient">2 cups shredded cheddar cheese</p>
               <p class="single-ingredient">1/2 teaspoon mustard powder</p>
               <p class="single-ingredient">1/2 teaspoon garlic powder</p>
               <p class="single-ingredient">Salt and pepper to taste</p>
            
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