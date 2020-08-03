<?php

namespace app\controllers;

use Yii;
use app\models\Registroacademico;
use app\models\RegistroacademicoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RegistroacademicoController implements the CRUD actions for Registroacademico model.
 */
class RegistroacademicoController extends Controller
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
     * Lists all Registroacademico models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RegistroacademicoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Registroacademico model.
     * @param integer $idaprendiz
     * @param integer $idcompetencia
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idaprendiz, $idcompetencia)
    {
        return $this->render('view', [
            'model' => $this->findModel($idaprendiz, $idcompetencia),
        ]);
    }

    /**
     * Creates a new Registroacademico model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Registroacademico();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idaprendiz' => $model->idaprendiz, 'idcompetencia' => $model->idcompetencia]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Registroacademico model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idaprendiz
     * @param integer $idcompetencia
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idaprendiz, $idcompetencia)
    {
        $model = $this->findModel($idaprendiz, $idcompetencia);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idaprendiz' => $model->idaprendiz, 'idcompetencia' => $model->idcompetencia]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Registroacademico model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idaprendiz
     * @param integer $idcompetencia
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idaprendiz, $idcompetencia)
    {
        $this->findModel($idaprendiz, $idcompetencia)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Registroacademico model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idaprendiz
     * @param integer $idcompetencia
     * @return Registroacademico the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idaprendiz, $idcompetencia)
    {
        if (($model = Registroacademico::findOne(['idaprendiz' => $idaprendiz, 'idcompetencia' => $idcompetencia])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
