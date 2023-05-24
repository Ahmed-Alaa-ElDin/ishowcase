<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="/views/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/views/assets/css/styles.css">
</head>

<body>
    <!-- Navbar :: Start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/views/assets/images/assets_portrait/official-retailer-plaque-en.png" alt="Rolex">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end align-items-center w-100">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/category?id=<?= $main_category->getId() ?>">All Items</a>
                    </li>
                    <?php foreach ($sub_categories as $sub_category) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/category?id=<?= $sub_category->getId() ?>"><?= $sub_category->getLargeTitle() ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar :: End -->

    <!-- Banner :: Start -->
    <section class="w-100 homepage-banner"> </section>
    <!-- Banner :: End -->

    <!-- Text Component :: Start -->
    <section class="d-flex justify-content-center">
        <div class="text-component text-center">
            <div class="very-small-title">
                Experience a Rolex
            </div>
            <h1 class="large-title">
                Rolex Watches
            </h1>
            <p class="paragraph">
                Rolex watches are crafted from the finest raw materials and assembled with scrupulous attention to details. Every component is designed, developed and produces to the most exacting standards.
            </p>
        </div>
    </section>
    <!-- Text Component :: End -->

    <!-- Watch Grid :: Start -->
    <section class="watch-grid-section">
        <div class="watch-grid">

            <?php
            foreach ($watches as $watch) {
            ?>
                <!-- Watch :: Start -->
                <div class="watch-item">
                    <div class="watch-image">
                        <a href="/product?id=<?= $watch->getId() ?>">
                            <img src="/views/assets/images/<?= $watch->getModelNumber() ?>.png" alt="100001.png">
                        </a>
                    </div>
                    <div class="watch-details text-center">
                        <div class="subtitle"><?= $watch->getSmallTitle() ?></div>
                        <div class="small-title"><?= $watch->getLargeTitle() ?></div>
                        <div class="small-description"><?= $watch->getDescription() ?></div>
                    </div>
                </div>
            <?php
            } ?>
            <!-- Watch :: End -->
        </div>
    </section>
    <!-- Watch Grid :: End -->

    <!-- Footer :: Start -->
    <footer>Made with love :)</footer>
    <!-- Footer :: End -->

    <script src="/views/assets/js/bootstrap.min.js"></script>
    <script src="/views/assets/js/jquery-3.7.0.min.js"></script>
    <script src="/views/assets/js/scripts.js"></script>
</body>

</html>