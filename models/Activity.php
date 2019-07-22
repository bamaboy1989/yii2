<?php


namespace app\models;


class Activity extends \yii\base\Model{
    
    public $title;
    public $description;
    public $dateStart;
    public $isBlocked;
    
    public function rules() {
        return [
            ['title', 'required'],
            ['description', 'string', 'min' => 5],
            ['dateStart', 'string'],
            ['isBlocked', 'boolean']
        ];
    }
    
    public function attributeLabels() {
        return [
            'title'=>'Заголовоок'
        ];
    }
 
}
