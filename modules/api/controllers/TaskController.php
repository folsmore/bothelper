<?php

namespace app\modules\api\controllers;




class TaskController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Blocktasks';
    public function actions()
    {
        return ['index'];
    }
  
    public function actionIndex()
    {   
        
        $result=[];
        $model = new $this->modelClass;
        
        foreach($model::findAll(['numberBlock' => \Yii::$app->request->getQueryParam('numberBlock')]) as $row){
            $result[] = [
                'title'=> $row->Task,
                'answers' => $row->answers,
            ];
        }
        return $result;
        //return $model::findAll(['numberBlock' => \Yii::$app->request->getQueryParam('numberBlock')]);
        //return $data ? array_merge($data->getAttributes(), ['find' => true]) : ['find' => false];
    }
}

