<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of AuthController
 *
 * @author Acer
 */

use app\models\Users;



class AuthController extends \yii\web\Controller {
    
    public function actionSignUp() {
        
        $model=new Users();
        if(\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            if(\Yii::$app->auth->signUp($model)){
                return $this->redirect(['/auth/sign-in']);
            }
        }
        return $this->render('signup',['model'=>$model]);
      }
        
        
        
        
    }
 

