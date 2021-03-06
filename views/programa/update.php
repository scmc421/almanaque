<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programa */

$this->title = Yii::t('app', 'Update Programa: {name}', [
    'name' => $model->idprograma,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Programas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idprograma, 'url' => ['view', 'id' => $model->idprograma]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="programa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
