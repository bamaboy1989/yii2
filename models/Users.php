<?php

namespace app\models;

use Yii;


class Users extends UsersBase
{
    public $password;
    
    public function rules() {
        return array_merge([
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ], parent::rules());
    }
    
}
