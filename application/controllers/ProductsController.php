<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 04.05.18
 * Time: 9:45
 */

namespace application\controllers;
use application\Controller;
use application\models\CvDataFactory;

class ProductsController extends Controller
{
    public function actionIndex(){
        return $this->getView()->render('index/products', [
            'parts' => new CvDataFactory()
        ]);
    }
}