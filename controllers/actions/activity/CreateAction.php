<?php

namespace app\controllers\actions\activity;

use app\models\Activity;

class CreateAction extends \yii\base\Action {
    
    public $classEntity;
    
    public function run() {
       $model = new Activity();
       $activity = new $this->classEntity();
       
       if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());
            $model->fileImage = \yii\web\UploadedFile::getInstance($model, 'fileImage');
           print_r($path);
       }
       
       return $this->controller->render('create', ['model'=>$activity]);
    }
    
    private function saveUploadedFile(UploadedFile $file){
        $path = $this->getFilePath();
        $fileName = $this->genFileName($file);
        $path .= DIRECTORY_SEPARATOR . $fileName;
        
        if($file->saveAs($path)) {
            return $fileName;
        } else return null;
                
        
    }

        private function getFilePath() {
        $path = \Yii::getAlias('@webroot/images');
        \yii\helpers\FileHelper::createDirectory($path);
        print_r($path);
        return $path;
    }

        private function genFileName(UploadedFile $file) {
        return time().'_'.$file->getBaseName().'.'.$file->getExtension();
    }
    
    
}
