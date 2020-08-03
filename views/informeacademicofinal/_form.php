<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Informeacademicofinal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informeacademicofinal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idinformeacademico')->textInput() ?>

    <?= $form->field($model, 'idaprendiz')->textInput() ?>

    <?= $form->field($model, 'idcompetencia')->textInput() ?>

    <?= $form->field($model, 'idinstrutor')->textInput() ?>

    <?= $form->field($model, 'idresultado')->textInput() ?>

    <?= $form->field($model, 'fechainformefinal')->textInput() ?>

    <?= $form->field($model, 'trimestre')->textInput() ?>

    <?= $form->field($model, 'fallasinjustificadas')->textInput() ?>

    <?= $form->field($model, 'fallasjustificadas')->textInput() ?>

    <?= $form->field($model, 'nota1')->textInput() ?>

    <?= $form->field($model, 'nota2')->textInput() ?>

    <?= $form->field($model, 'nota3')->textInput() ?>

    <?= $form->field($model, 'promedio')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
