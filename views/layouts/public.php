<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppPublicAsset;

AppPublicAsset::register($this);
$url = Yii::getAlias("@web") . '/public-assets/images/';

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pro100Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= $url?>logo.png" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3 d-flex align-items-center">
                    <img style="margin-right: 10px;" src="<?= $url ?>logo.png" width="50px" height="50px" /><a class="navbar-brand" href="/">Pro100Service<span>.</span></a>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col">
                            <div class="top-wrap d-flex">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
                                <div class="text"><span>Адрес</span><span>Московская область г.Ступино ул. Пристанционная 6с1</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="top-wrap d-flex">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
                                <div class="text"><span>Позвоните нам</span><span>+7 (967) 190-23-58</span></div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-end align-items-center">
                            <div class="social-media">
                                <p class="mb-0 d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/public' ? 'active' : '' ?> <?php echo $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' ?>"><a href="/public" class="nav-link">Главная</a></li>
                    <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/public/services' ? 'active' : '' ?>"><a href="/public/services" class="nav-link">Услуги</a></li>
                    <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/public/contact' ? 'active' : '' ?>"><a href="/public/contact" class="nav-link">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <?= $content ?>

    <footer class="footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="logo"><img style="margin-right: 10px;" src="<?= $url ?>logo.png" width="50px" height="50px" /><a href="#">Pro100Service<span>.</span></a></h2>
                        <p>Наш автосервис гарантирует вам полноценное техническое обслуживание и качественный ремонт автомобиля.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Контакты</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">Московская область г.Ступино ул. Пристанционная 6с1</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+7 (967) 190-23-58</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Авторские права &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> ООО "Pro100Service
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>