<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Informeacademicofinal */

$this->title = Yii::t('app', 'Create Informeacademicofinal');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Informeacademicofinals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informeacademicofinal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
