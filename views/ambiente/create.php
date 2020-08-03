<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ambiente */

$this->title = Yii::t('app', 'Create Ambiente');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ambientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ambiente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
