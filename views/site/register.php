<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegisterUser */
/* @var $form ActiveForm */
$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-register">

<?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput() ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-register -->
