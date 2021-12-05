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
                    <?php include('./src/PHP/molecules/shopping_cart.php') ?>
                </li>
            </ul>
        </nav>
    </div>
</header>

