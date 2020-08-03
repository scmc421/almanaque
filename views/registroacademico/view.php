<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Registroacademico */

$this->title = $model->idaprendiz;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Registroacademicos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="registroacademico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idaprendiz' => $model->idaprendiz, 'idcompetencia' => $model->idcompetencia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idaprendiz' => $model->idaprendiz, 'idcompetencia' => $model->idcompetencia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idaprendiz',
            'idcompetencia',
        ],
    ]) ?>

</div>
