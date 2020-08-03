<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Registroacademico */

$this->title = Yii::t('app', 'Create Registroacademico');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Registroacademicos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registroacademico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
