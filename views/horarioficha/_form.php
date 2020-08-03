<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;

use yii\web\JsExpression;
use yii2fullcalendar\yii2fullcalendar;
/* @var $this yii\web\View */
/* @var $model app\models\Horarioficha */
/* @var $form yii\widgets\ActiveForm */
/*VOY A CAMBIAR EL ORIGINAL, SI ALGO RESTAURAR COPIA 3 OJOOOO*/
?>

<div class="horarioficha-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php //ID HORARIO FICHA ?>
    
    <?= $form->field($model, 'idhorarioficha')->textInput(['maxlength' => true]) ?>
    
    <?php //FECHA INICIAL ?>
    <?php 
    echo '<label class="control-label">Fecha de Inicio de la Ficha</label>';
    echo DatePicker::widget([ 
    'language' => 'es',
    'model' => $model,
    'attribute' => 'fechaInicial',
    'name' => 'fechaInicial',
    'value'=>date('Y-m-d'),
    'readonly' => true,
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy/mm/dd',
        'timePicker'=>true,
        'timePickerIncrement'=>15,
        'singleDatePicker'=>true,
        'showDropdowns'=>true,
        'locale' => 'it-IT',
        'defaultTimeZone' => 'America/Bogota'
    ]
    ]);?>
    <?php //ID INSTRUCTOR ?>
    <?php
        $instructores=app\models\Instructor::find()->all();
        $listData=ArrayHelper::map($instructores,'idinstructor','nom1instructor');
        echo $form->field($model, 'idinstructor')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>
    <?php //ID COMPETENCIA ?>
    <?php
        $competencias=app\models\Competencia::find()->all();
        $listData=ArrayHelper::map($competencias,'idcompetencia','nomcompetencia');
        echo $form->field($model, 'idcompetencia')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>
    <?php //ID AMBIENTE ?>
    <?php
        $ambientes=app\models\Ambiente::find()->all();
        $listData=ArrayHelper::map($ambientes,'idambiente','nomambiente');
        echo $form->field($model, 'idambiente')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>
<?php //ID FRANJA ?>

<?php
        $franjas=app\models\Franja::find()->all();
        $listData=ArrayHelper::map($franjas,'idfranja','horainicial');
        echo $form->field($model, 'idfranja')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>

<?php //ID FICHA ?>
    <?php
        $fichas=app\models\Ficha::find()->all();
        $listData=ArrayHelper::map($fichas,'idficha','idficha');
        echo $form->field($model, 'idficha')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>
<?php //DIA DE LA SEMANA - VARCHAR ?>
    <?php
        $listData = [ 0 => 'Lunes', 1 => 'Martes',  2 => 'Miércoles', 3 =>'Jueves', 4 => 'Viernes', 5 => 'Sábado', 6 => 'Domingo'];
        echo $form->field($model, 'diadelasemana')
        ->dropDownList($listData,
        ['prompt'=>'Select...']
        );
    ?>
<?php //TRIMESTRE ?>
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


<?php/*Aquí epieza el fullcalendar*/

?>
<div class="schedule-index">
    <div id="unscheduled"></div>
    <div class="clearfix"></div>

    <div id="schedules">
        <p id="fc-right-btn" class="pull-right">
            <?php 
echo Html::a('<span class="glyphicon glyphicon-plus"></span> Schedule Ticket', ['create'], ['class' => 'btn btn-success btn-xs showModalButton']);
?>
            <?php 
echo Html::a('<span class="glyphicon glyphicon-phone-alt"></span> New Call', ['log-work', 'remote' => true], ['class' => 'btn btn-info btn-xs showModalButton']);
?>
        </p>
        <?php 
echo DatePicker::widget(['id' => 'gotoDate', 'name' => 'gotoDate', 'type' => DatePicker::TYPE_BUTTON, 'pluginEvents' => ['changeDate' => 'datePickerOnChange'], 'buttonOptions' => ['class' => 'btn fc-button fc-state-default fc-corner-left fc-corner-right'], 'pluginOptions' => ['autoclose' => true, 'todayHighlight' => true, 'format' => 'yyyy-mm-dd']]);
?>

        <div id="axis">
            <h4>&nbsp;</h4>
            <?php 
echo yii2fullcalendar::widget(['eventAfterAllRender' => 'refreshDate', 'clientOptions' => ['defaultView' => 'agendaDay', 'minTime' => '05:00:00', 'maxTime' => '20:00:00', 'allDaySlot' => false, 'height' => 'auto', 'header' => ['right' => '']]]);
?>
        </div>

        <div id="techs">
            <?php 
foreach ($techs as $tech) {
    ?>
                <div class="schedule">
                    <h4 class="text-center"><?php 
    echo Html::a($tech->contact->name, ['tech/schedule', 'id' => $tech->contact_id]);
    ?>
</h4>
                    <?php 
    echo yii2fullcalendar::widget(['header' => false, 'ajaxEvents' => \yii\helpers\Url::to(['schedule/ajax-events', 'tech_id' => $tech->contact_id]), 'eventRender' => 'eventRender', 'options' => ['data' => ['tech' => $tech->contact_id]], 'clientOptions' => ['height' => 'auto', 'defaultView' => 'agendaDay', 'allDaySlot' => false, 'minTime' => '05:00:00', 'maxTime' => '20:00:00', 'businessHours' => ['start' => $tech->start_of_day, 'end' => $tech->end_of_day, 'dow' => [1, 2, 3, 4, 5]], 'dayClick' => new JsExpression('dayClick'), 'droppable' => true, 'dropAccept' => '.fc-event.future', 'drop' => new JsExpression('externalEventDrop'), 'eventDrop' => new JsExpression('eventDrop'), 'eventResize' => new JsExpression('eventResize'), 'eventDragStart' => new JsExpression('function(event, jsEvent, ui, view) { view.el.css("z-index", 10); startInternalDrag(jsEvent, view); }'), 'eventDragStop' => new JsExpression('function(event, jsEvent, ui, view) { view.el.css("z-index", 1); }'), 'loading' => new JsExpression('function(isLoading) { $("#loading").toggle(isLoading); }')]]);
    ?>
                </div>
            <?php 
}
?>
        </div>

        <legend>
            <span class="green">On-Site</span>
            <span class="blue">Remote</span>
            <span class="grey">Past</span>
            <span class="red">Needs Update</span>
        </legend>
    </div>
</div>

<?php 
//\frontend\assets\SchedulerAsset::register($this);
$this->registerJsFile('/js/jquery.ui.touch.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('/js/schedule.js', ['depends' => [\yii\web\JqueryAsset::className()]]);