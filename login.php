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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" defer />
    <!--fONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" defer />
    <!--ICONS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,1,0" defer />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" defer />
    <!--Script-->
  </head>
  <body>

        <!--Nav------------------------------------------------->
        <nav id="myNav"> <?php include 'php/navbar.php'; ?> </nav>



    <div class="bd">
      <section>
        <div class="login-container">
          <div class="login-form">
            <form id="login-form">
              <h1>Login</h1>
              <div>
                <label for="login-username">Username</label>
                <input type="text" id="login-username" required />
              </div>
              <div>
                <label for="login-password">Password</label>
                <input type="password" id="login-password" required />
              </div>
              <button type="submit">Sign In</button>
              <p>Not yet Registered? <span>
                <a href="register.php">Sign up</a>
              </span>
            </p>
            </form>
        
          </div>
        </div>
      </section>
    </div>



      <footer> <?php include 'php/footer.php'; ?> </footer>
            <script src="js/nav.js" defer></script>
      <script src="js/authetication.js"></script>
  </body>
</html>