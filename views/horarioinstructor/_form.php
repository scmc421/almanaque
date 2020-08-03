<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Horarioinstructor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horarioinstructor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fechainicial')->textInput() ?>

    <?= $form->field($model, 'idficha')->textInput() ?>

    <?= $form->field($model, 'idinstructor')->textInput() ?>

    <?= $form->field($model, 'idcompetencia')->textInput() ?>

    <?= $form->field($model, 'idambiente')->textInput() ?>

    <?= $form->field($model, 'idfranja')->textInput() ?>

    <?= $form->field($model, 'diadelasemana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trimestre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aniohorario')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
