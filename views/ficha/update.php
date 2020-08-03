<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ficha */

$this->title = Yii::t('app', 'Update Ficha: {name}', [
    'name' => $model->idficha,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fichas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idficha, 'url' => ['view', 'id' => $model->idficha]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ficha-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
