<?php

namespace app\controllers;

use Yii;
use app\models\Programacompetencia;
use app\models\ProgramacompetenciaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProgramacompetenciaController implements the CRUD actions for Programacompetencia model.
 */
class ProgramacompetenciaController extends Controller
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
     * Lists all Programacompetencia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProgramacompetenciaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Programacompetencia model.
     * @param integer $idprograma
     * @param integer $idcompetencia
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idprograma, $idcompetencia)
    {
        return $this->render('view', [
            'model' => $this->findModel($idprograma, $idcompetencia),
        ]);
    }

    /**
     * Creates a new Programacompetencia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Programacompetencia();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idprograma' => $model->idprograma, 'idcompetencia' => $model->idcompetencia]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Programacompetencia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idprograma
     * @param integer $idcompetencia
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idprograma, $idcompetencia)
    {
        $model = $this->findModel($idprograma, $idcompetencia);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idprograma' => $model->idprograma, 'idcompetencia' => $model->idcompetencia]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Programacompetencia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idprograma
     * @param integer $idcompetencia
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idprograma, $idcompetencia)
    {
        $this->findModel($idprograma, $idcompetencia)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Programacompetencia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idprograma
     * @param integer $idcompetencia
     * @return Programacompetencia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idprograma, $idcompetencia)
    {
        if (($model = Programacompetencia::findOne(['idprograma' => $idprograma, 'idcompetencia' => $idcompetencia])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
