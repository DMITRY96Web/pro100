<section class="hero-wrap hero-wrap-2" style="background-image: url('/public-assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/public">Главная <i class="fa fa-chevron-right"></i></a></span> <span>Услуги <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Наши услуги</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Услуги</span>
                <h2>Наши услуги</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($services as $service) { $url = Yii::getAlias("@web") . '/img/services/' . $service->image; ?>
                <div class="col-md-4 ftco-animate">
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url(<?= $url ?>);">
                        <a href="<?= $url ?>" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span><?= $service->name ?></span>
                                <h2><a href="/public/service-view/?id=<?= $service->id ?>"><?= $service->price ?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div> -->

    </div>
</section>