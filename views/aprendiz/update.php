<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aprendiz */

$this->title = Yii::t('app', 'Update Aprendiz: {name}', [
    'name' => $model->idaprendiz,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aprendizs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idaprendiz, 'url' => ['view', 'id' => $model->idaprendiz]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="aprendiz-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
