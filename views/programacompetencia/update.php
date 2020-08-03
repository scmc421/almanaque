<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programacompetencia */

$this->title = Yii::t('app', 'Update Programacompetencia: {name}', [
    'name' => $model->idprograma,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Programacompetencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idprograma, 'url' => ['view', 'idprograma' => $model->idprograma, 'idcompetencia' => $model->idcompetencia]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="programacompetencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
