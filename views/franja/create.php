<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Franja */

$this->title = Yii::t('app', 'Create Franja');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Franjas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="franja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
