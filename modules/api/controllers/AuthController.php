<?php

namespace app\modules\api\controllers;




class AuthController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Users';
    public function actions()
    {
        return ['index'];
    }
    public function actionIndex()
    {
        $model = new $this->modelClass;
        $data = $model::findOne(['phone' => \Yii::$app->request->getQueryParam('phone')]);
        return $data ? array_merge($data->getAttributes(), ['find' => true]) : ['find' => false];
    }
}

