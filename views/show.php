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
            <input type="hidden" id="id" value="<?= $watch->getId() ?>">

            <!-- large_title & small_title -->
            <div>
                <div>
                    <span data-field="large_title" class="medium-title input-to-text">
                        <?= $watch->getLargeTitle() ?>
                    </span>
                </div>

                <div>
                    <span data-field="small_title" class="small-title input-to-text">
                        <?= $watch->getSmallTitle() ?>
                    </span>
                </div>
            </div>

            <!-- description -->
            <div>
                <div class="section-title">
                    Description:
                    <span data-field="description" class="description input-to-text">
                        <?= $watch->getDescription() ?>
                    </span>
                </div>
            </div>

            <!-- price -->
            <div>
                <div class="section-title">
                    Price:
                    <span data-field="price" class="description input-to-text">
                        <?= $watch->getPrice() ?>
                    </span>
                </div>
            </div>

            <!-- model_number -->
            <div>
                <div class="section-title">
                    Model Number:
                    <span data-field="model_number" class="description input-to-text">
                        <?= $watch->getModelNumber() ?>
                    </span>
                </div>
            </div>

            <!-- model_case -->
            <div>
                <div class="section-title">
                    Model Case:
                    <span data-field="model_case" class="description input-to-text">
                        <?= $watch->getModelCase() ?>
                    </span>
                </div>
            </div>

            <!-- water_resistance -->
            <div>
                <div class="section-title">
                    Water Resistance:
                    <span data-field="water_resistance" class="description input-to-text">
                        <?= $watch->getWaterResistance() ?>
                    </span>
                </div>
            </div>

            <!-- movement -->
            <div>
                <div class="section-title">
                    Movement:
                    <span data-field="movement" class="description input-to-text">
                        <?= $watch->getMovement() ?>
                    </span>
                </div>
            </div>

            <!-- caliber -->
            <div>
                <div class="section-title">
                    Caliber:
                    <span data-field="caliber" class="description input-to-text">
                        <?= $watch->getCaliber() ?>
                    </span>
                </div>
            </div>

            <!-- power_reserve -->
            <div>
                <div class="section-title">
                    Power Reserve:
                    <span data-field="power_reserve" class="description input-to-text">
                        <?= $watch->getPowerReserve() ?>
                    </span>
                </div>
            </div>

            <!-- bracelet -->
            <div>
                <div class="section-title">
                    Bracelet:
                    <span data-field="bracelet" class="description input-to-text">
                        <?= $watch->getBracelet() ?>
                    </span>
                </div>
            </div>

            <!-- dial -->
            <div>
                <div class="section-title">
                    Dial:
                    <span data-field="dial" class="description input-to-text">
                        <?= $watch->getDial() ?>
                    </span>
                </div>
            </div>

        </div>
        <!-- Details Part :: End -->

        <!-- Image Part :: Start -->
        <div class="product-image">
            <img src="/views/assets/images/<?= $watch->getModelNumber() ?>.png" alt="<?= $watch->getModelNumber() ?>">
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