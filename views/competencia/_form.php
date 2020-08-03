<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Competencia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="competencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcompetencia')->textInput() ?>

    <?= $form->field($model, 'nomcompetencia')->textInput(['maxlength' => true]) ?>

    <?php
        $programas=app\models\Programa::find()->all();
        $listData=ArrayHelper::map($programas,'idprograma','nomprograma');
        echo $form->field($model, 'idprograma')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
