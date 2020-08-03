<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Horarioficha */

$this->title = Yii::t('app', 'Create Horarioficha');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Horariofichas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horarioficha-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
