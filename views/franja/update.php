<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Franja */

$this->title = Yii::t('app', 'Update Franja: {name}', [
    'name' => $model->idfranja,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Franjas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idfranja, 'url' => ['view', 'id' => $model->idfranja]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="franja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
