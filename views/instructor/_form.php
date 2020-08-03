<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Instructor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instructor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idinstructor')->textInput() ?>

    <?= $form->field($model, 'nom1instructor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom2instructor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ape1instructor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ape2instructor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailinstructor')->textInput(['maxlength' => true]) ?>
    <?php
    /* $form->field($model, 'idusuario')->textInput() */
    ?>
    
   


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
