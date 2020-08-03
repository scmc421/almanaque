<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Registroacademico */

$this->title = Yii::t('app', 'Update Registroacademico: {name}', [
    'name' => $model->idaprendiz,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Registroacademicos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idaprendiz, 'url' => ['view', 'idaprendiz' => $model->idaprendiz, 'idcompetencia' => $model->idcompetencia]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="registroacademico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
