<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;

/**
 * Description of DAOComponent
 *
 * @author Acer
 */
class DAOComponent {
    
    private function getConnection() {
        return \Yii::$app->db;
    }
    
    public function getProducts() {
        $sql = 'select * from products';
        return $this->getConnection()->createCommand($sql)->queryAll();
    }
    
    public function getProduct($productId) {
        $sql = 'select * from products where id=:product';
        return $this->getConnection()->createCommand($sql, [':product' => $productId])->QueryAll();
    }
    
}
