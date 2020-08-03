<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Resultado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resultado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idresultado')->textInput() ?>

    <?= $form->field($model, 'nombreresultado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idcompetencia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
