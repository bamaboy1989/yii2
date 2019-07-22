<?php

namespace app\controllers;

use app\controllers\actions\activity\CreateAction;


class ActivityController extends \app\base\baseController {
    public function actions() {
        return [
            'create'=>['class'=>CreateAction::class, 'classEntity'=> \app\models\Activity::class]
        ];
    }
    
}
