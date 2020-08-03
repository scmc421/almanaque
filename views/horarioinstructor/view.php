<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Horarioinstructor */

$this->title = $model->idhorario;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Horarioinstructors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="horarioinstructor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idhorario' => $model->idhorario, 'fechainicial' => $model->fechainicial, 'idficha' => $model->idficha, 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia, 'idambiente' => $model->idambiente, 'idfranja' => $model->idfranja, 'diadelasemana' => $model->diadelasemana, 'trimestre' => $model->trimestre, 'aniohorario' => $model->aniohorario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idhorario' => $model->idhorario, 'fechainicial' => $model->fechainicial, 'idficha' => $model->idficha, 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia, 'idambiente' => $model->idambiente, 'idfranja' => $model->idfranja, 'diadelasemana' => $model->diadelasemana, 'trimestre' => $model->trimestre, 'aniohorario' => $model->aniohorario], [
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
            'idhorario',
            'fechainicial',
            'idficha',
            'idinstructor',
            'idcompetencia',
            'idambiente',
            'idfranja',
            'diadelasemana',
            'trimestre',
            'aniohorario',
        ],
    ]) ?>

</div>
