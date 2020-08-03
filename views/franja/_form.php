<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Franja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="franja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idfranja')->textInput() ?>

    <?= $form->field($model, 'horainicial')->textInput() ?>

    <?= $form->field($model, 'horafinal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
