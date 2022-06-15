<?php

use yii\widgets\DetailView;

$url = Yii::getAlias("@web") . '/img/services/';
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('/public-assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/public">Главная <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="/public/services">Услуги <i class="fa fa-chevron-right"></i></a></span><span><?= $model->name ?> </span></p>
                <h1 class="mb-0 bread"><?= $model->name ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Описание выбранной услуги</span>
                <h2><?= $model->name ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'name:ntext',
                    [
                        'attribute' => 'image',
                        'value' => function ($model) use ($url) {
                            $url .= $model->image;
                            return "<img src=$url />";
                        },
                        'format' => 'html'
                    ],
                    'text:ntext',
                    'price:ntext',
                ],
            ]) ?>
        </div>

    </div>
</section>