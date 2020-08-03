<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dicta */

$this->title = Yii::t('app', 'Update Dicta: {name}', [
    'name' => $model->idinstructor,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dictas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idinstructor, 'url' => ['view', 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dicta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
