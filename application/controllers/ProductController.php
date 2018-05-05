<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 25.03.18
 * Time: 22:56
 */
namespace application\controllers;
use application\Controller;
use application\models\CvDataFactory;


class ProductController extends Controller
{
    public function actionItem(){
        return $this->getView()->render('index/product', [
            'parts' => new CvDataFactory()
        ]);
    }
}