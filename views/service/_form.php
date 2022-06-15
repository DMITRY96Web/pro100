<?php

use yii\helpers\Html;
use kartik\file\FileInput;
use kartik\form\ActiveForm;
use kartik\form\ActiveField;

/* @var $this yii\web\View */
/* @var $model app\models\Service */
/* @var $form yii\widgets\ActiveForm */

$url = Yii::getAlias("@web") . '/img/services/';
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'image')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*', 'multiple' => false],
        'language' => 'ru',
        'pluginOptions' => [
            'initialPreview' => (!$model->isNewRecord) ? \yii\helpers\Url::to(["$url$model->image"]) : "",
            'initialPreviewAsData' => (!$model->isNewRecord) ? true : false,
        ],
    ]); ?>

    <?= $form->field($model, 'text', [
        'hintType' => ActiveField::HINT_SPECIAL,
        'hintSettings' => ['placement' => 'right', 'onLabelClick' => true, 'onLabelHover' => false]
    ])->textArea([
        'id' => 'address-input',
        'placeholder' => 'Введите описание...',
        'rows' => 4
    ]); ?>

    <?= $form->field($model, 'price', [
        'addon' => [
            'prepend' => ['content' => 'руб.', 'options' => ['class' => 'alert-success']],
            'append' => ['content' => '.00', 'options' => ['style' => 'font-family: Monaco, Consolas, monospace;']],
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Созранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>