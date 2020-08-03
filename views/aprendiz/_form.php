<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aprendiz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aprendiz-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idaprendiz')->textInput() ?>

    <?= $form->field($model, 'nom1aprendiz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom2aprendiz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ape1aprendiz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ape2aprendiz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teleaprendiz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailaprendiz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idusuario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
