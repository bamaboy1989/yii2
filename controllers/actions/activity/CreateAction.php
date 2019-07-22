<?php

namespace app\controllers\actions\activity;

use app\models\Activity;

class CreateAction extends \yii\base\Action {
    
    public $classEntity;
    
    public function run() {
       $activity = new $this->classEntity();
       
       if (\Yii::$app->request->isPost) {
           $activity->load(\Yii::$app->request->post());

           if(\Yii::$app->activity->createActivity($activity)){
               echo 'Успех.';exit;
           }
       }
       
       return $this->controller->render('create', ['model'=>$activity]);
    }
}
