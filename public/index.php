<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pizza Delivery System</title>
  <link rel="stylesheet" href="src/Bootstrap/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="src/CSS/styles.css" />
  <link rel="stylesheet" href="src/CSS/index.css" />
</head>

<body class="container-xxl p-0 d-flex flex-column">
  <header class="pb-0">
    <div class="d-flex justify-content-between">
      <a href="./index.php" class="text-decoration-none px-3">
        <div class="d-flex flex-row">
          <img id="header__logo" src="src/img/logo.png" alt="Pizza Slice" />
          <div class="centered-text d-none d-sm-flex">Pizza Slice</div>
          <div class="centered-text d-flex d-sm-none">PS</div>
        </div>
      </a>
      <nav class="h-100">
        <ul class="list-group list-group-horizontal list-unstyled h-100">
          <li>
            <a href="./index.php" class="text-decoration-none">
              <div class="centered-text d-none d-md-flex">Home</div>
              <div class="material-icons d-flex d-md-none">home</div>
            </a>
          </li>
          <li>
            <a href="./menu.php" class="text-decoration-none">
              <div class="centered-text d-none d-md-flex">Menu</div>
              <div class="material-icons d-flex d-md-none">menu_book</div>
            </a>
          </li>
          <li>
            <a href="#" class="text-decoration-none">
              <div class="material-icons">account_circle</div>
            </a>
          </li>
          <li>
            <a href="#" class="text-decoration-none">
              <div class="material-icons">shopping_bag</div>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main id="content" class="p-3 flex-grow-1">
    <div>
      <div id="carouselExampleIndicators" class="carousel slide rounded-3" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./src/img/index/caro-1.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./src/img/index/caro-2.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>
                Some representative placeholder content for the second slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./src/img/index/caro-3.jpeg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
                Some representative placeholder content for the third slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./src/img/index/caro-2.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>Fourth slide label</h5>
              <p>
                Some representative placeholder content for the fourth slide.
              </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div>
        <div class="row">
          <?
          for ($i = 1; $i <= 4; $i++) {
            echo '
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card text-white">
                <img src="./src/img/index/foodMenu' . $i . '.jpeg" class="card-img" alt="..." />
                <div class="card-img-overlay">
                  <h5 class="card-title">Menu ' . $i . '</h5>
                  <p class="card-text">Description ' . $i . '</p>
                </div>
              </div>
            </div>
          ';
          }
          ?>
        </div>
      </div>
    </div>
    <div>
      <h4>Latest blog posts</h4>
      <p>Blog 1</p>
      <p>Blog 2</p>
    </div>
    <div>
      <h4>We are located at</h4>
      <p>Take a look at our <b>map page</b>.</p>
    </div>
    <div>
      <h4>Any other questions ?</h4>
      <p>Just <b>call</b> us.</p>
    </div>
    <?php
    for ($i = 0; $i < 5; $i++) {
      echo $i;
    }
    ?>
  </main>
  <footer>
    <div class="p-3">
      <div class="row">
        <div class="col-12 col-lg-4">
          <h5 class="footer-info-element-heading text-center">PS INFO</h5>
        </div>
        <div class="col-12 col-lg-4">
          <h5 class="footer-info-element-heading text-center">PS APP</h5>
        </div>
        <div class="col-12 col-lg-4">
          <h5 class="footer-info-element-heading text-center">PS CARES</h5>
        </div>
      </div>
      <hr />
      <p class="mb-0">Pizza Slice</p>
      <p class="copyright">
        TM & Copyright 2021 Pizza Slice Corporation. All Rights Reserved.
      </p>
    </div>
  </footer>
  <script src="src/Bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>