<?php

namespace app\controllers;

use Yii;
use app\models\Dicta;
use app\models\DictaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DictaController implements the CRUD actions for Dicta model.
 */
class DictaController extends Controller
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
     * Lists all Dicta models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DictaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dicta model.
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idinstructor, $idcompetencia)
    {
        return $this->render('view', [
            'model' => $this->findModel($idinstructor, $idcompetencia),
        ]);
    }

    /**
     * Creates a new Dicta model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dicta();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dicta model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idinstructor, $idcompetencia)
    {
        $model = $this->findModel($idinstructor, $idcompetencia);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dicta model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idinstructor, $idcompetencia)
    {
        $this->findModel($idinstructor, $idcompetencia)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dicta model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @return Dicta the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idinstructor, $idcompetencia)
    {
        if (($model = Dicta::findOne(['idinstructor' => $idinstructor, 'idcompetencia' => $idcompetencia])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
