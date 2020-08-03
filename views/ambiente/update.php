<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ambiente */

$this->title = Yii::t('app', 'Update Ambiente: {name}', [
    'name' => $model->idambiente,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ambientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idambiente, 'url' => ['view', 'id' => $model->idambiente]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ambiente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
