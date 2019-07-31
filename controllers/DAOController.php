<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use components\DAOComponent;

/**
 * Description of DAOController
 *
 * @author Acer
 */
class DaoController extends \yii\base\Controller {
    
    public function actionIndex() {
        $dao = \Yii::$app->dao;
        $product = $dao->getProduct(\Yii::$app->request->get('product', 1));
        $products = $dao->getProducts();
        
        return $this->render('index', ['products' => $products, 'product' => $product]);
    }
    
}
