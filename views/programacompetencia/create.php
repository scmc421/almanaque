<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programacompetencia */

$this->title = Yii::t('app', 'Create Programacompetencia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Programacompetencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programacompetencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
