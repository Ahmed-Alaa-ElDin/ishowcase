<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $watch->getSmallTitle() ?></title>
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
                        <a class="nav-link" aria-current="page" href="/">Home</a>
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

    <!-- Product Specs :: Start -->
    <section class="product-specs">
        <!-- Details Part :: Start -->
        <div class="product-details">
            <!-- large_title -->
            <div>
                <div class="section-title">
                    Large Title
                </div>
                <div class="description  text-center">
                    <input type="hidden" id="id" value="<?= $watch->getId() ?>">
                    <input type="text" class="form-control" id="large_title" value="<?= $watch->getLargeTitle() ?>">
                    <span class="text-danger">Note that the data will be updated on blur</span>
                </div>
            </div>
            <!-- small_title -->
            <div>
                <div class="section-title">
                    Small Title
                </div>
                <div class="description">
                    <?= $watch->getSmallTitle() ?>
                </div>
            </div>
            <!-- description -->
            <div>
                <div class="section-title">
                    Description
                </div>
                <div class="description">
                    <?= $watch->getDescription() ?>
                </div>
            </div>
            <!-- price -->
            <div>
                <div class="section-title">
                    Price
                </div>
                <div class="description">
                    <?= $watch->getPrice() ?>
                </div>
            </div>
            <!-- model_number -->
            <div>
                <div class="section-title">
                    Model Number
                </div>
                <div class="description">
                    <?= $watch->getModelNumber() ?>
                </div>
            </div>
            <!-- model_case -->
            <div>
                <div class="section-title">
                    Model Case
                </div>
                <div class="description">
                    <?= $watch->getModelCase() ?>
                </div>
            </div>
            <!-- water_resistance -->
            <div>
                <div class="section-title">
                    Water Resistance
                </div>
                <div class="description">
                    <?= $watch->getWaterResistance() ?>
                </div>
            </div>
            <!-- movement -->
            <div>
                <div class="section-title">
                    Movement
                </div>
                <div class="description">
                    <?= $watch->getMovement() ?>
                </div>
            </div>
            <!-- caliber -->
            <div>
                <div class="section-title">
                    Caliber
                </div>
                <div class="description">
                    <?= $watch->getCaliber() ?>
                </div>
            </div>
            <!-- power_reserve -->
            <div>
                <div class="section-title">
                    Power Reserve
                </div>
                <div class="description">
                    <?= $watch->getPowerReserve() ?>
                </div>
            </div>
            <!-- bracelet -->
            <div>
                <div class="section-title">
                    Bracelet
                </div>
                <div class="description">
                    <?= $watch->getBracelet() ?>
                </div>
            </div>
            <!-- dial -->
            <div>
                <div class="section-title">
                    Dial
                </div>
                <div class="description">
                    <?= $watch->getDial() ?>
                </div>
            </div>

        </div>
        <!-- Details Part :: End -->

        <!-- Image Part :: Start -->
        <div class="product-image">
            <img src="/views/assets/images/<?= $watch->getModelNumber() ?>.png" alt="">
        </div>
        <!-- Image Part :: End -->
    </section>
    <!-- Product Specs :: End -->

    <!-- Footer :: Start -->
    <footer>Made with love :)</footer>
    <!-- Footer :: End -->

    <script src="/views/assets/js/bootstrap.min.js"></script>
    <script src="/views/assets/js/jquery-3.7.0.min.js"></script>
    <script src="/views/assets/js/scripts.js"></script>
</body>

</html>