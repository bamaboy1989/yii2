<?php


namespace app\components;


use app\models\Activity;
use yii\base\Component;

class AcitvityComponent extends Component
{
    public function createActivity(Activity &$activity): bool
    {
        if($activity->validate()){
            return true;
        }else{
            false;
        }
    }
}