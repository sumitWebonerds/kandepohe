<?php

namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\models\Profiles;
use common\models\ProfilesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * ProfileController implements the CRUD actions for Profiles model.
 */
class ProfileController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','create','view','update','delete','logout'],
                'rules' => [
                    [
                        'actions' => ['index','create','view','update','delete','logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Profiles models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProfilesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Profiles model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Profiles model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $id = Yii::$app->user->getId();
        $exists = Profiles::find()->where( [ 'user_id' => $id  ] )->exists();
        if($exists){
            $this->redirect(array('education/create'));
        }else{
            $model = new Profiles();
            if ($model->load(Yii::$app->request->post())) {
               $imageName = "profile_image_".rand();
               $model->profile_image = UploadedFile::getInstance($model,'profile_image');
               $model->profile_image->saveAs('css/'.$imageName.'.'.$model->profile_image->extension);
               $model->profile_image = $imageName.'.'.$model->profile_image->extension;
               $model->user_id = Yii::$app->user->getId();
               $model->save();
               // if($model->save()){
                    // $this->redirect(array('education/create')); 
               // }
               
               return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Updates an existing Profiles model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $imageName = "profile_image_".rand();
               $model->profile_image = UploadedFile::getInstance($model,'profile_image');
               if(!empty($model->file)){
               $model->profile_image->saveAs('css/'.$imageName.'.'.$model->profile_image->extension);
               $model->profile_image = $imageName.'.'.$model->profile_image->extension;
               $model->save(false);
                    return $this->redirect(['view', 'id' => $model->id]);
                }else{  
                    $pid = Yii::$app->user->identity->id;
                    $customer = Profiles::find()->where(['id' => $pid])->one();
                    $model->profile_image = $customer->profile_image;
                    $model->save(false);    
                    return $this->redirect(['view', 'id' => $model->id]);
                }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Profiles model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Profiles model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Profiles the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Profiles::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
