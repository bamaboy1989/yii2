<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;

/**
 * Description of AuthComponent
 *
 * @author Acer
 */

use app\models\Users;


class AuthComponent extends \yii\base\Component{
  
    public function signUp(Users &$model): bool
    {
        if (!$model->validate(['email', 'password'])) {
            return false;
        }
        $model->password_hash = $this->generateHashPassword($model->password);
        $model->auth_key = $this->generateAuthKey();
        if ($model->save()) {
            return true;
        }
        return false;
    }
        
        
        private function generateAuthKey() {
        return \yii::$app->security->generateRandomString();
    }
    
     private function generateHashPassword($password) {
        return \yii::$app->security->generatePasswordHash($password);
    }
        
    }
    
    

    

   
    

