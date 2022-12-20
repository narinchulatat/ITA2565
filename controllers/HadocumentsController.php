<?php

namespace app\controllers;

use Yii;
use app\models\HaDocuments;
use app\models\HadocumentsSearch;

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
use app\models\Group;

/**
 * HadocumentsController implements the CRUD actions for hadocuments model.
 */
class HadocumentsController extends Controller
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
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'admin', 'view', 'create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['admin', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['index', 'view'],
                        'allow' => true,
                        'roles' => ['?', '@']
                    ]
                ]
            ]
        ];
    }

    /**
     * Lists all hadocuments models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new HadocumentsSearch();
    //     $group_id = Yii::$app->request->get('group_id');
    //     if (isset($group_id)) {
    //         $group = Group::find()->where(['id' => $group_id])->one();

    //         // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    //         $dataProvider = $searchModel->searchHadocuments();
    //         $dataProvider->sort->defaultOrder = ['id'=>SORT_ASC];

    //         return $this->render('index', [
    //             'searchModel' => $searchModel,
    //             'dataProvider' => $dataProvider,
    //             'group' => $group,
    //         ]);
    //     }
    // }
    public function actionIndex()
    {

        $searchModel = new HadocumentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAdmin()
    {

        $searchModel = new HadocumentsSearch();
        $dataProvider = $searchModel->searchAdmin(Yii::$app->request->queryParams);

        return $this->render('admin', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single hadocuments model.
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
     * Creates a new hadocuments model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new hadocuments();

        if ($model->load(Yii::$app->request->post())) {

            $this->CreateDir($model->ref);
            $model->covenant = $this->uploadSingleFile($model);
            $model->docs = $this->uploadMultipleFile($model);
            $model->user_id = Yii::$app->user->identity->id;

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->ref = substr(Yii::$app->getSecurity()->generateRandomString(), 10);
        }

        return $this->render('create', [
            'model' => $model,
            'group' => [],
        ]);
    }

    /**
     * Updates an existing hadocuments model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $group = ArrayHelper::map($this->getGroup($model->cat_id), 'id', 'name');

        $tempCovenant = $model->covenant;
        $tempDocs     = $model->docs;
        if ($model->load(Yii::$app->request->post())) {

            $this->CreateDir($model->ref);
            $model->covenant = $this->uploadSingleFile($model, $tempCovenant);
            $model->docs = $this->uploadMultipleFile($model, $tempDocs);
            $model->user_id = Yii::$app->user->identity->id;

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'group' => $group
        ]);
    }

    /**
     * Deletes an existing hadocuments model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        //remove upload file & data
        $this->removeUploadDir($model->ref);
        Uploads::deleteAll(['ref' => $model->ref]);

        $model->delete();

        return $this->redirect(['admin']);
    }

    /**
     * Finds the hadocuments model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return hadocuments the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = hadocuments::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDeletefile($id, $field, $fileName)
    {
        $status = ['success' => false];
        if (in_array($field, ['docs', 'covenant'])) {
            $model = $this->findModel($id);
            $files =  Json::decode($model->{$field});
            if (array_key_exists($fileName, $files)) {
                if ($this->deleteFile('file', $model->ref, $fileName)) {
                    $status = ['success' => true];
                    unset($files[$fileName]);
                    $model->{$field} = Json::encode($files);
                    $model->save();
                }
            }
        }
        echo json_encode($status);
    }

    private function deleteFile($type = 'file', $ref, $fileName)
    {
        if (in_array($type, ['file', 'thumbnail'])) {
            if ($type === 'file') {
                $filePath = hadocuments::getUploadPath() . $ref . '/' . $fileName;
            } else {
                $filePath = hadocuments::getUploadPath() . $ref . '/thumbnail/' . $fileName;
            }
            @unlink($filePath);
            return true;
        } else {
            return false;
        }
    }

    // public function actionDownload($id, $file, $file_name)
    // {
    //     $model = $this->findModel($id);
    //     if (!empty($model->ref) && !empty($model->docs)) {
    //         Yii::$app->response->sendFile($model->getUploadPath() . '/' . $model->ref . '/' . $file, $file_name);
    //     } else {
    //         $this->redirect(['/hadocuments/view', 'id' => $id]);
    //     }
    // }

    public function actionDownload($id, $file, $file_name)
    {
        $model = $this->findModel($id);
        if (!empty($model->ref) && !empty($model->docs)) {
            if (substr($file_name, -3) == 'pdf') {
                return Yii::$app->response->sendFile($model->getUploadPath() . '/' . $model->ref . '/' . $file, $file_name, ['inline' => true]);
            } else {
                Yii::$app->response->sendFile($model->getUploadPath() . '/' . $model->ref . '/' . $file, $file_name);
            }
        } else {
            $this->redirect(['/news/view', 'id' => $id]);
        }
    }

    /**
     * Upload & Rename file
     * @return mixed
     */
    private function uploadSingleFile($model, $tempFile = null)
    {
        $file = [];
        $json = '';
        try {
            $UploadedFile = UploadedFile::getInstance($model, 'covenant');
            if ($UploadedFile !== null) {
                $oldFileName = $UploadedFile->basename . '.' . $UploadedFile->extension;
                $newFileName = md5($UploadedFile->basename . time()) . '.' . $UploadedFile->extension;
                $UploadedFile->saveAs(hadocuments::UPLOAD_FOLDER . '/' . $model->ref . '/' . $newFileName);
                $file[$newFileName] = $oldFileName;
                $json = Json::encode($file);
            } else {
                $json = $tempFile;
            }
        } catch (Exception $e) {
            $json = $tempFile;
        }
        return $json;
    }

    private function uploadMultipleFile($model, $tempFile = null)
    {
        $files = [];
        $json = '';
        $tempFile = Json::decode($tempFile);
        $UploadedFiles = UploadedFile::getInstances($model, 'docs');
        if ($UploadedFiles !== null) {
            foreach ($UploadedFiles as $file) {
                try {
                    $oldFileName = $file->basename . '.' . $file->extension;
                    $newFileName = md5($file->basename . time()) . '.' . $file->extension;
                    $file->saveAs(hadocuments::UPLOAD_FOLDER . '/' . $model->ref . '/' . $newFileName);
                    $files[$newFileName] = $oldFileName;
                } catch (Exception $e) {
                }
            }
            $json = json::encode(ArrayHelper::merge($tempFile, $files));
        } else {
            $json = $tempFile;
        }
        return $json;
    }

    // start dependent dropdown
    public function actionGetGroup()
    {
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $id = $parents[0];
                $out = $this->getGroup($id);
                return Json::encode(['output' => $out, 'selected' => '']);
                // echo Json::encode(['output' => $out, 'selected' => '']);
                // return;
            }
        }
        return Json::encode(['output' => '', 'selected' => '']);
    }

    protected function getGroup($id)
    {
        $datas = Group::find()->where(['cat_id' => $id])->all();
        return $this->MapData($datas, 'id', 'name');
    }

    protected function MapData($datas, $fieldId, $fieldName)
    {
        $obj = [];
        foreach ($datas as $key => $value) {
            array_push($obj, ['id' => $value->{$fieldId}, 'name' => $value->{$fieldName}]);
        }
        return $obj;
    }
    // end dependent dropdown

    private function CreateDir($folderName)
    {
        if ($folderName != NULL) {
            $basePath = hadocuments::getUploadPath();
            if (BaseFileHelper::createDirectory($basePath . $folderName, 0777)) {
                BaseFileHelper::createDirectory($basePath . $folderName . '/thumbnail', 0777);
            }
        }
        return;
    }

    private function removeUploadDir($dir)
    {
        BaseFileHelper::removeDirectory(hadocuments::getUploadPath() . $dir);
    }
}
