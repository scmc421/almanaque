<?php

namespace app\controllers;

use Yii;
use app\models\Horarioinstructor;
use app\models\HorarioinstructorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HorarioinstructorController implements the CRUD actions for Horarioinstructor model.
 */
class HorarioinstructorController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Horarioinstructor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HorarioinstructorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Horarioinstructor model.
     * @param integer $idhorario
     * @param string $fechainicial
     * @param integer $idficha
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @param integer $idambiente
     * @param integer $idfranja
     * @param string $diadelasemana
     * @param string $trimestre
     * @param string $aniohorario
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idhorario, $fechainicial, $idficha, $idinstructor, $idcompetencia, $idambiente, $idfranja, $diadelasemana, $trimestre, $aniohorario)
    {
        return $this->render('view', [
            'model' => $this->findModel($idhorario, $fechainicial, $idficha, $idinstructor, $idcompetencia, $idambiente, $idfranja, $diadelasemana, $trimestre, $aniohorario),
        ]);
    }

    /**
     * Creates a new Horarioinstructor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Horarioinstructor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idhorario' => $model->idhorario, 'fechainicial' => $model->fechainicial, 'idficha' => $model->idficha, 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia, 'idambiente' => $model->idambiente, 'idfranja' => $model->idfranja, 'diadelasemana' => $model->diadelasemana, 'trimestre' => $model->trimestre, 'aniohorario' => $model->aniohorario]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Horarioinstructor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idhorario
     * @param string $fechainicial
     * @param integer $idficha
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @param integer $idambiente
     * @param integer $idfranja
     * @param string $diadelasemana
     * @param string $trimestre
     * @param string $aniohorario
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idhorario, $fechainicial, $idficha, $idinstructor, $idcompetencia, $idambiente, $idfranja, $diadelasemana, $trimestre, $aniohorario)
    {
        $model = $this->findModel($idhorario, $fechainicial, $idficha, $idinstructor, $idcompetencia, $idambiente, $idfranja, $diadelasemana, $trimestre, $aniohorario);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idhorario' => $model->idhorario, 'fechainicial' => $model->fechainicial, 'idficha' => $model->idficha, 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia, 'idambiente' => $model->idambiente, 'idfranja' => $model->idfranja, 'diadelasemana' => $model->diadelasemana, 'trimestre' => $model->trimestre, 'aniohorario' => $model->aniohorario]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Horarioinstructor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idhorario
     * @param string $fechainicial
     * @param integer $idficha
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @param integer $idambiente
     * @param integer $idfranja
     * @param string $diadelasemana
     * @param string $trimestre
     * @param string $aniohorario
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idhorario, $fechainicial, $idficha, $idinstructor, $idcompetencia, $idambiente, $idfranja, $diadelasemana, $trimestre, $aniohorario)
    {
        $this->findModel($idhorario, $fechainicial, $idficha, $idinstructor, $idcompetencia, $idambiente, $idfranja, $diadelasemana, $trimestre, $aniohorario)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Horarioinstructor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idhorario
     * @param string $fechainicial
     * @param integer $idficha
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @param integer $idambiente
     * @param integer $idfranja
     * @param string $diadelasemana
     * @param string $trimestre
     * @param string $aniohorario
     * @return Horarioinstructor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idhorario, $fechainicial, $idficha, $idinstructor, $idcompetencia, $idambiente, $idfranja, $diadelasemana, $trimestre, $aniohorario)
    {
        if (($model = Horarioinstructor::findOne(['idhorario' => $idhorario, 'fechainicial' => $fechainicial, 'idficha' => $idficha, 'idinstructor' => $idinstructor, 'idcompetencia' => $idcompetencia, 'idambiente' => $idambiente, 'idfranja' => $idfranja, 'diadelasemana' => $diadelasemana, 'trimestre' => $trimestre, 'aniohorario' => $aniohorario])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
