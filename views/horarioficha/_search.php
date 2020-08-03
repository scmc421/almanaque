<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HorariofichaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horarioficha-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idhorarioficha') ?>

    <?= $form->field($model, 'fechaInicial') ?>

    <?= $form->field($model, 'idinstructor') ?>

    <?= $form->field($model, 'idcompetencia') ?>

    <?= $form->field($model, 'idambiente') ?>

    <?php // echo $form->field($model, 'idfranja') ?>

    <?php // echo $form->field($model, 'idficha') ?>

    <?php // echo $form->field($model, 'diadelasemana') ?>

    <?php // echo $form->field($model, 'trimestre') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
