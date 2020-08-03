<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Competencia */

$this->title = Yii::t('app', 'Update Competencia: {name}', [
    'name' => $model->idcompetencia,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Competencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcompetencia, 'url' => ['view', 'id' => $model->idcompetencia]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="competencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
