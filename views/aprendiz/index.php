<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AprendizSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Aprendizs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aprendiz-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Aprendiz'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idaprendiz',
            'nom1aprendiz',
            'nom2aprendiz',
            'ape1aprendiz',
            'ape2aprendiz',
            //'teleaprendiz',
            //'emailaprendiz:email',
            //'idusuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
