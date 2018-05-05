<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 29.04.18
 * Time: 1:46
 */
namespace application\controllers;
use application\Controller;
use application\models\CvDataFactory;

class CollectionController extends Controller
{

    public function actionItem(){
        return $this->getView()->render('index/collection', [
            'parts' => new CvDataFactory()
        ]);
    }
}