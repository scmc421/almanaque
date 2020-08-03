<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ficha */

$this->title = Yii::t('app', 'Create Ficha');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fichas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ficha-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
