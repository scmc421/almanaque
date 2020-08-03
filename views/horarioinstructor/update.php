<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Horarioinstructor */

$this->title = Yii::t('app', 'Update Horarioinstructor: {name}', [
    'name' => $model->idhorario,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Horarioinstructors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idhorario, 'url' => ['view', 'idhorario' => $model->idhorario, 'fechainicial' => $model->fechainicial, 'idficha' => $model->idficha, 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia, 'idambiente' => $model->idambiente, 'idfranja' => $model->idfranja, 'diadelasemana' => $model->diadelasemana, 'trimestre' => $model->trimestre, 'aniohorario' => $model->aniohorario]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="horarioinstructor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
