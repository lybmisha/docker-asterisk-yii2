<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\QueueMembers;
use app\models\Queue_membersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Queue_membersController implements the CRUD actions for QueueMembers model.
 */
class Queue_membersController extends Controller
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
     * Lists all QueueMembers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Queue_membersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single QueueMembers model.
     * @param string $queue_name
     * @param string $interface
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($queue_name, $interface)
    {
        return $this->render('view', [
            'model' => $this->findModel($queue_name, $interface),
        ]);
    }

    /**
     * Creates a new QueueMembers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new QueueMembers();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'queue_name' => $model->queue_name, 'interface' => $model->interface]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing QueueMembers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $queue_name
     * @param string $interface
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($queue_name, $interface)
    {
        $model = $this->findModel($queue_name, $interface);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'queue_name' => $model->queue_name, 'interface' => $model->interface]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing QueueMembers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $queue_name
     * @param string $interface
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($queue_name, $interface)
    {
        $this->findModel($queue_name, $interface)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the QueueMembers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $queue_name
     * @param string $interface
     * @return QueueMembers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($queue_name, $interface)
    {
        if (($model = QueueMembers::findOne(['queue_name' => $queue_name, 'interface' => $interface])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
