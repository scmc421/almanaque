<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Ficha */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ficha-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idficha')->textInput() ?>

    <?php 

echo '<label class="control-label">Fecha de Inicio de la Ficha</label>';
echo DatePicker::widget([
    
    'language' => 'es',
    'model' => $model,
    'attribute' => 'fechadeinicio',
    'name' => 'fechadeinicio',
    'value'=>date('Y-m-d'),
    'readonly' => true,
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'mm/dd/yyyy',
        'timePicker'=>true,
        'timePickerIncrement'=>15,
        'singleDatePicker'=>true,
        'showDropdowns'=>true,

        'locale' => 'it-IT',
        'defaultTimeZone' => 'America/Bogota'
    ]
]);?>

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
