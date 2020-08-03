<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Informeacademicofinal */

$this->title = Yii::t('app', 'Update Informeacademicofinal: {name}', [
    'name' => $model->idinformeacademico,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Informeacademicofinals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idinformeacademico, 'url' => ['view', 'id' => $model->idinformeacademico]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="informeacademicofinal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
