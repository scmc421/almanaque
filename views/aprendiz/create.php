<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aprendiz */

$this->title = Yii::t('app', 'Create Aprendiz');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aprendizs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aprendiz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
