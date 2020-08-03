<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Resultado */

$this->title = Yii::t('app', 'Update Resultado: {name}', [
    'name' => $model->idresultado,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resultados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idresultado, 'url' => ['view', 'id' => $model->idresultado]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="resultado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
