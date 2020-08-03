<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Competencia */

$this->title = Yii::t('app', 'Create Competencia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Competencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
