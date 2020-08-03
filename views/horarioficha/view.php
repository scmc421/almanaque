<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Horarioficha */

$this->title = $model->idhorarioficha;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Horariofichas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="horarioficha-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idhorarioficha' => $model->idhorarioficha, 'fechaInicial' => $model->fechaInicial, 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia, 'idambiente' => $model->idambiente, 'idfranja' => $model->idfranja, 'idficha' => $model->idficha, 'diadelasemana' => $model->diadelasemana, 'trimestre' => $model->trimestre], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idhorarioficha' => $model->idhorarioficha, 'fechaInicial' => $model->fechaInicial, 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia, 'idambiente' => $model->idambiente, 'idfranja' => $model->idfranja, 'idficha' => $model->idficha, 'diadelasemana' => $model->diadelasemana, 'trimestre' => $model->trimestre], [
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
            'idhorarioficha',
            'fechaInicial',
            'idinstructor',
            'idcompetencia',
            'idambiente',
            'idfranja',
            'idficha',
            'diadelasemana',
            'trimestre',
        ],
    ]) ?>

</div>
