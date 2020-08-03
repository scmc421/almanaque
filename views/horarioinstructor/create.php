<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Horarioinstructor */

$this->title = Yii::t('app', 'Create Horarioinstructor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Horarioinstructors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horarioinstructor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
