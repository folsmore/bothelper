<?php

namespace app\modules\api\controllers;




class MaterialController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Blockmaterials';
    public function actions()
    {
        return ['index'];
    }
    public function actionIndex()
    {
        $model = new $this->modelClass;
        return $model::findAll(['numberBlock' => \Yii::$app->request->getQueryParam('numberBlock')]);
        //return $data ? array_merge($data->getAttributes(), ['find' => true]) : ['find' => false];
    }
}

