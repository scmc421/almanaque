<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AprendizSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aprendiz-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idaprendiz') ?>

    <?= $form->field($model, 'nom1aprendiz') ?>

    <?= $form->field($model, 'nom2aprendiz') ?>

    <?= $form->field($model, 'ape1aprendiz') ?>

    <?= $form->field($model, 'ape2aprendiz') ?>

    <?php // echo $form->field($model, 'teleaprendiz') ?>

    <?php // echo $form->field($model, 'emailaprendiz') ?>

    <?php // echo $form->field($model, 'idusuario') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
