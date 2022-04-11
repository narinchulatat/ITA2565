<?php

namespace app\controllers;

use Yii;
use app\models\Group;
use app\models\GroupSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\html;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
use yii\helpers\BaseFileHelper;
use app\models\Uploads;
use app\models\HaCategory;

/**
 * GroupController implements the CRUD actions for group model.
 */
class GroupController extends Controller
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
     * Lists all group models.
     * @return mixed
     */
     public function actionIndex()
     {
         $searchModel = new GroupSearch();
         $dataProvider = $searchModel->searchIndex();

         return $this->render('index', [
             'searchModel' => $searchModel,
             'dataProvider' => $dataProvider,
         ]);
     }

    // public function actionIndex()
    // {
    //     $searchModel = new GroupSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    //
    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    // public function actionIndex(){
    //   $searchModel = new GroupSearch();
    //     $cat_id = Yii::$app->request->get('cat_id');
    //     if(isset($cat_id)){

    //         $ha_category = HaCategory::find()->where(['id' => $cat_id])->one();

    //         $dataProvider = $searchModel->searchGroup();
    //         $dataProvider->sort->defaultOrder = ['id'=>SORT_ASC];

    //         return $this->render('index',[
    //           'searchModel' => $searchModel,
    //           'dataProvider' => $dataProvider,
    //           'ha_category' =>$ha_category
    //         ]);
    //     }

    // }

    /**
     * Displays a single group model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new group model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new group();

        if ($model->load(Yii::$app->request->post()));
             $model->create_date = date('Y-m-d H:i:s');
             if($model->save()) {
            return $this->redirect(['create']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing group model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing group model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the group model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return group the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = group::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
