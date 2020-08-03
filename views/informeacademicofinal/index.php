<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InformeacademicofinalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Informeacademicofinals');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informeacademicofinal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Informeacademicofinal'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idinformeacademico',
            'idaprendiz',
            'idcompetencia',
            'idinstrutor',
            'idresultado',
            //'fechainformefinal',
            //'trimestre',
            //'fallasinjustificadas',
            //'fallasjustificadas',
            //'nota1',
            //'nota2',
            //'nota3',
            //'promedio',
            //'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
