<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/icons.png" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <!-- nav  -->
    <nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="index.php" class="nav-logo">
            <img src="./assets/logo2.png" alt="simply recipes" />
          </a>
          <button class="nav-btn btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <div class="nav-links">
          <a href="index.php" class="nav-link"> home </a>
          <a href="about.php" class="nav-link"> about </a>
          <a href="tags.php" class="nav-link"> tags </a>
          <a href="recipes.php" class="nav-link"> recipes </a>
          <a href="form-upload.php" class="nav-link"> form upload </a>
          <a href="https://youtu.be/wElVrcz7U5Ql" class="nav-link"> link video presentasi </a>
          
          <div class="nav-link contact-link">
            <a href="contact.php" class="btn"> contact </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end of nav -->
    <main class="page">
      <section class="about-page">
        <article>
          <h2>Kelompok 6</h2>
          <p>
            Anggota Kelompok:
          </p>
          <p>
            1. Bryliando Arthur Bagarai (210211060159) </p>
           <p>2. Melitia Eunike Atuy (210211060081)</p> 
            <p>3. Rachel Ashley Zefanya Sigar (210211060104)</p>
        <p>4. Winston Gigir (210211060229)</p>
          <a href="https://youtu.be/wElVrcz7U5Q" class="btn"> link video </a>
        </article>
        <!-- needs fixes -->
        <img
          src="./assets/about.jpeg"
          alt="Person Pouring Salt in Bowl"
          class="img about-img"
        />
      </section>
      <section class="featured-recipes">
        <h5 class="featured-title">Another Yummy Receips!!!</h5>
        <div class="recipes-list">
          <!-- single recipe -->
          <a href="single-recipe.php" class="recipe">
            <img
              src="./assets/recipes/resep1.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Tempe Mendoan</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe2.php" class="recipe">
            <img
              src="./assets/recipes/resep2.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Bakso Sosis Asam Manis</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe3.php" class="recipe">
            <img
              src="./assets/recipes/resep3.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Mie Ayam</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
        </div>
      </section>
    </main>
    <!-- footer -->
    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">CookingDiary</span> Built by
        <a href="https://youtu.be/wElVrcz7U5Q">Kelompok 6</a>
      </p>
    </footer>
    <script src="./js/app.js"></script>
  </body>
</html>