<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Horarioficha */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horarioficha-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idhorarioficha')->textInput(['maxlength' => true]) ?>
    
    <?php 
    echo '<label class="control-label">Fecha de Inicio de la Ficha</label>';
    echo DatePicker::widget([ 
    'language' => 'es',
    'model' => $model,
    'attribute' => 'idhorarioficha',
    'name' => 'idhorarioficha',
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
        $instructores=app\models\Instructor::find()->all();
        $listData=ArrayHelper::map($instructores,'idinstructor','nom1instructor');
        echo $form->field($model, 'idinstructor')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>

    <?php
        $competencias=app\models\Competencia::find()->all();
        $listData=ArrayHelper::map($competencias,'idcompetencia','nomcompetencia');
        echo $form->field($model, 'idcompetencia')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>

    <?php
        $ambientes=app\models\Ambiente::find()->all();
        $listData=ArrayHelper::map($ambientes,'idambiente','nomambiente');
        echo $form->field($model, 'idambiente')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>


<?php
        $franjas=app\models\Franja::find()->all();
        $listData=ArrayHelper::map($franjas,'idfranja','horainicial');
        echo $form->field($model, 'idfranja')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>


    <?php
        $fichas=app\models\Ficha::find()->all();
        $listData=ArrayHelper::map($fichas,'idficha','idficha');
        echo $form->field($model, 'idficha')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>

    <?php
        $listData = [ 0 => 'Lunes', 1 => 'Martes',  2 => 'Miércoles', 3 =>'Jueves', 4 => 'Viernes', 5 => 'Sábado', 6 => 'Domingo'];
        echo $form->field($model, 'diadelasemana')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>

    <?php
        $listData = [ 0 => 'I', 1 => 'II',  2 => 'III', 3 =>'IV'];
        echo $form->field($model, 'trimestre')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>
    
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>
   
    <?php ActiveForm::end(); ?>

</div>