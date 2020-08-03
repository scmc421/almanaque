<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dicta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dicta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idinstructor')->textInput() ?>

    <?= $form->field($model, 'idcompetencia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
