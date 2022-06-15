<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAuthAsset;
use yii\bootstrap4\Html;

AppAuthAsset::register($this);

$url = Yii::getAlias("@web") . '/public-assets/images/';
$this->title = "Авторизация";
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= $url ?>logo.png" />

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>