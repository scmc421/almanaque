<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InstructorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instructor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idinstructor') ?>

    <?= $form->field($model, 'nom1instructor') ?>

    <?= $form->field($model, 'nom2instructor') ?>

    <?= $form->field($model, 'ape1instructor') ?>

    <?= $form->field($model, 'ape2instructor') ?>

    <?php // echo $form->field($model, 'emailinstructor') ?>

    <?php // echo $form->field($model, 'idusuario') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
