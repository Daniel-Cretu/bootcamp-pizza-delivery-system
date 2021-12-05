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
  <link rel="stylesheet" href="src/CSS/menu.css" />
</head>

<body class="container-xxl p-0 d-flex flex-column">

  <?php include("./src/PHP/origamis/header.php") ?>
  
  <!-- <div id="mobile-anchors" class="m-auto w-auto d-xxl-none">
    <a href="#anchor-pizza" class="mobile-anchors-button text-decoration-none">
      <div class="material-icons inline-icon text-white">local_pizza</div>
    </a>
    <a href="#anchor-salads" class="mobile-anchors-button text-decoration-none">
      <div class="material-icons inline-icon text-white">dinner_dining</div>
    </a>
    <a href="#anchor-drinks" class="mobile-anchors-button text-decoration-none">
      <div class="material-icons inline-icon text-white">local_bar</div>
    </a>
  </div> -->

  <div id="desktop-anchors" class="m-auto w-auto d-none d-xxl-flex">

    <a href="#anchor-pizza" class="desktop-anchors-button text-decoration-none">
      <svg class="desktop-anchors-back-part">
        <polygon points="0,20 0,70 20,70 20,0" style="fill:#ffba5a; stroke:#ffba5a;   stroke-width:0; " />
      </svg>
      <div class="desktop-anchors-material-icons material-icons inline-icon text-white">local_pizza</div>
      <div class="desktop-anchors-text centered-text">Pizza</div>
    </a>
    <a href="#anchor-salads" class="desktop-anchors-button text-decoration-none">
      <svg class="desktop-anchors-back-part">
        <polygon points="0,20 0,70 20,70 20,0" style="fill:#ffba5a; stroke:#ffba5a;   stroke-width:0; " />
      </svg>
      <div class="desktop-anchors-material-icons material-icons inline-icon text-white">dinner_dining</div>
      <div class="desktop-anchors-text centered-text">Salads</div>
    </a>
    <a href="#anchor-drinks" class="desktop-anchors-button text-decoration-none">
      <svg class="desktop-anchors-back-part">
        <polygon points="0,20 0,70 20,70 20,0" style="fill:#ffba5a; stroke:#ffba5a;   stroke-width:0; " />
      </svg>
      <div class="desktop-anchors-material-icons material-icons inline-icon text-white">local_bar</div>
      <div class="desktop-anchors-text centered-text">Drinks</div>
    </a>
  </div>
  <main id="content" class="p-3 flex-grow-1">
    <div class="row">
      <div class="col-12">
        <a class="anchor" id="anchor-pizza"></a>
        <h2>Pizza</h2>
        <div class="row">
          <?
          for ($i = 1; $i <= 4; $i++) {
            echo '
             <div class="col-12 col-md-6 col-xl-3">
              <div class="card text-white">
                <img src="./src/img/menu/pizza' . $i . '.jpg" class="card-img" alt="..." />
                <div class="card-img-overlay">
                  <h5 class="card-title">Pizza ' . $i . '</h5>
                  <p class="card-text">Description ' . $i . '</p>
                </div>
              </div>
            </div>
          ';
          }
          ?>
        </div>
        <a class="anchor" id="anchor-salads"></a>
        <h2>Salads</h2>
        <div class="row">
          <?
          for ($i = 1; $i <= 6; $i++) {
            echo '
             <div class="col-12 col-md-6 col-xl-3">
              <div class="card text-white">
                <img src="./src/img/menu/salad' . $i . '.jpg" class="card-img" alt="..." />
                <div class="card-img-overlay">
                  <h5 class="card-title">Salad ' . $i . '</h5>
                  <p class="card-text">Description ' . $i . '</p>
                </div>
              </div>
            </div>
          ';
          }
          ?>
        </div>
      </div>
      <a class="anchor" id="anchor-drinks"></a>
      <h2>Drinks</h2>
      <div class="row">
        <?
        for ($i = 1; $i <= 3; $i++) {
          echo '
             <div class="col-12 col-md-6 col-xl-3">
              <div class="card text-white">
                <img src="./src/img/menu/drink' . $i . '.jpg" class="card-img" alt="..." />
                <div class="card-img-overlay">
                  <h5 class="card-title">Drink ' . $i . '</h5>
                  <p class="card-text">Description ' . $i . '</p>
                </div>
              </div>
            </div>
          ';
        }
        ?>
      </div>
    </div>
  </main>

  <?php include("./src/PHP/origamis/footer.php") ?>

  <script src="src/Bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>