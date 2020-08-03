<?php

namespace app\controllers;

use Yii;
use app\models\Horarioficha;
use app\models\HorariofichaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HorariofichaController implements the CRUD actions for Horarioficha model.
 */
class HorariofichaController extends Controller
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
     * Lists all Horarioficha models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HorariofichaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    /**
     * Displays a single Horarioficha model.
     * @param integer $idhorarioficha
     * @param string $fechaInicial
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @param integer $idambiente
     * @param integer $idfranja
     * @param integer $idficha
     * @param string $diadelasemana
     * @param string $trimestre
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idhorarioficha, $fechaInicial, $idinstructor, $idcompetencia, $idambiente, $idfranja, $idficha, $diadelasemana, $trimestre)
    {
        return $this->render('view', [
            'model' => $this->findModel($idhorarioficha, $fechaInicial, $idinstructor, $idcompetencia, $idambiente, $idfranja, $idficha, $diadelasemana, $trimestre),
        ]);
    }

    /**
     * Creates a new Horarioficha model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Horarioficha();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idhorarioficha' => $model->idhorarioficha, 'fechaInicial' => $model->fechaInicial, 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia, 'idambiente' => $model->idambiente, 'idfranja' => $model->idfranja, 'idficha' => $model->idficha, 'diadelasemana' => $model->diadelasemana, 'trimestre' => $model->trimestre]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Horarioficha model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idhorarioficha
     * @param string $fechaInicial
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @param integer $idambiente
     * @param integer $idfranja
     * @param integer $idficha
     * @param string $diadelasemana
     * @param string $trimestre
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idhorarioficha, $fechaInicial, $idinstructor, $idcompetencia, $idambiente, $idfranja, $idficha, $diadelasemana, $trimestre)
    {
        $model = $this->findModel($idhorarioficha, $fechaInicial, $idinstructor, $idcompetencia, $idambiente, $idfranja, $idficha, $diadelasemana, $trimestre);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idhorarioficha' => $model->idhorarioficha, 'fechaInicial' => $model->fechaInicial, 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia, 'idambiente' => $model->idambiente, 'idfranja' => $model->idfranja, 'idficha' => $model->idficha, 'diadelasemana' => $model->diadelasemana, 'trimestre' => $model->trimestre]);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Horarioficha model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idhorarioficha
     * @param string $fechaInicial
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @param integer $idambiente
     * @param integer $idfranja
     * @param integer $idficha
     * @param string $diadelasemana
     * @param string $trimestre
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idhorarioficha, $fechaInicial, $idinstructor, $idcompetencia, $idambiente, $idfranja, $idficha, $diadelasemana, $trimestre)
    {
        $this->findModel($idhorarioficha, $fechaInicial, $idinstructor, $idcompetencia, $idambiente, $idfranja, $idficha, $diadelasemana, $trimestre)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Horarioficha model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idhorarioficha
     * @param string $fechaInicial
     * @param integer $idinstructor
     * @param integer $idcompetencia
     * @param integer $idambiente
     * @param integer $idfranja
     * @param integer $idficha
     * @param string $diadelasemana
     * @param string $trimestre
     * @return Horarioficha the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idhorarioficha, $fechaInicial, $idinstructor, $idcompetencia, $idambiente, $idfranja, $idficha, $diadelasemana, $trimestre)
    {
        if (($model = Horarioficha::findOne(['idhorarioficha' => $idhorarioficha, 'fechaInicial' => $fechaInicial, 'idinstructor' => $idinstructor, 'idcompetencia' => $idcompetencia, 'idambiente' => $idambiente, 'idfranja' => $idfranja, 'idficha' => $idficha, 'diadelasemana' => $diadelasemana, 'trimestre' => $trimestre])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
    /*Este es para el calendario action calendar 
    que mande a renderizar una vista*/
    public function actionCalendar()
    {
        $model = new Horarioficha();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idhorarioficha' => $model->idhorarioficha, 'fechaInicial' => $model->fechaInicial, 'idinstructor' => $model->idinstructor, 'idcompetencia' => $model->idcompetencia, 'idambiente' => $model->idambiente, 'idfranja' => $model->idfranja, 'idficha' => $model->idficha, 'diadelasemana' => $model->diadelasemana, 'trimestre' => $model->trimestre]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }
}
