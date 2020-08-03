<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HorarioinstructorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horarioinstructor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idhorario') ?>

    <?= $form->field($model, 'fechainicial') ?>

    <?= $form->field($model, 'idficha') ?>

    <?= $form->field($model, 'idinstructor') ?>

    <?= $form->field($model, 'idcompetencia') ?>

    <?php // echo $form->field($model, 'idambiente') ?>

    <?php // echo $form->field($model, 'idfranja') ?>

    <?php // echo $form->field($model, 'diadelasemana') ?>

    <?php // echo $form->field($model, 'trimestre') ?>

    <?php // echo $form->field($model, 'aniohorario') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
