<?php


namespace app\models;


class Activity extends \yii\base\Model{
    
    public $title;
    public $description;
    public $creator;
    public $responsible;
    public $deadline;
    public $isIterated;
    public $isBlocked;
    
    public $email;
    public $emailRepeat;
    
    public $userNotification;
    
    public $fileImage;




    public function beforeValidate() {
        
        $date = \DateTime::createFromFormat('d.m.Y', $this->deadline);
        if ($date) {
            $this->deadline=$date->format('Y-m-d');
        }
        parent::beforeValidate();
    }

        public function rules() {
        return [
            ['fileImage', 'file', 'extensions' => ['jpg', 'png']],
            [['title', 'email'], 'trim'],
            [['title', 'deadline'], 'required'],
            ['deadline', 'date', 'format' => 'php:Y-m-d'],
            ['description', 'string', 'min' => 5, 'max' => 300],
            [['creator', 'responsible', 'deadline'], 'string'],
            [['isIterated', 'isBlocked'], 'boolean'],
            ['email', 'email'],
            ['emailRepeat', 'compare', 'compareAttribute' => 'email']
        ];
    }
    
    public function attributeLabels() {
        return [
            'title'=>'Заголовоок',
            'description' => 'Описание',
            'creator' => 'Создатель',
            'responsible' => 'Ответственный',
            'deadline' => 'Дэдлайн',
            'isIterated' => 'Повторяющееся',
            'isBlocked' => 'Блокирующее', 
            'email' => 'Ваш email'
            
            
        ];
    }
 
}
