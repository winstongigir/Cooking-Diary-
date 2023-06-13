<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tags</title>
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
         <section class="tags-wrapper">
          <!-- single tag -->
              <a href="tag-template.php" class="tag">
                <h5>Daging</h5>
                <p>0 Recipe</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="tag-template2.php" class="tag">
                <h5>Sarapan</h5>
                <p>1 Receips</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="tag-template3.php" class="tag">
                <h5>Nasi</h5>
                <p>1 recipe</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="tag-template4.php" class="tag">
                <h5>Makan Siang</h5>
                <p>4 Recipe</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="tag-template5.php" class="tag">
                <h5>food</h5>
                <p>4 recipe</p>
              </a>
            <!-- end of single tag -->
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
