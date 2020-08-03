<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aprendiz */

$this->title = $model->idaprendiz;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aprendizs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aprendiz-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idaprendiz], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idaprendiz], [
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
            'nom1aprendiz',
            'nom2aprendiz',
            'ape1aprendiz',
            'ape2aprendiz',
            'teleaprendiz',
            'emailaprendiz:email',
            'idusuario',
        ],
    ]) ?>

</div>
