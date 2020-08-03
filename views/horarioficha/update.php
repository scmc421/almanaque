<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Horarioficha */

$this->title = Yii::t('app', 'Update Horarioficha: {name}', [
    'name' => $model->idhorarioficha,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Horariofichas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idhorarioficha, 'url' => ['view', 'idhorarioficha' => $model->idhorarioficha, 'fechaInicial' => $model->fechaInicial, 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia, 'idambiente' => $model->idambiente, 'idfranja' => $model->idfranja, 'idficha' => $model->idficha, 'diadelasemana' => $model->diadelasemana, 'trimestre' => $model->trimestre]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="horarioficha-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
