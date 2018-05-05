<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 22.03.18
 * Time: 19:50
 */

namespace application\controllers;
use application\Controller;
use application\models\CvDataFactory;

class IndexController extends Controller
{
    private $product_url = 'https://c755705064d37bd7c721be28197079a1:83bbce739752199b8e948f819ad58adb@rosilstore.myshopify.com/admin/product_listings.json';
    private $collection_url = 'https://c755705064d37bd7c721be28197079a1:83bbce739752199b8e948f819ad58adb@rosilstore.myshopify.com/admin/collection_listings.json';
    private $appliance_url = 'https://c755705064d37bd7c721be28197079a1:83bbce739752199b8e948f819ad58adb@rosilstore.myshopify.com/admin/collects.json';

    public function actionIndex(){

        $cv = new CvDataFactory();

        try {
            $products = json_decode($this->getContent($this->product_url), true);
            $products = $this->prepareDataProducts($products);
            $cv->setProducts($products);

            $collections = json_decode($this->getContent($this->collection_url), true);
            $collections = $this->prepareDataCollections($collections);
            $cv->setCollections($collections);

            $appliance = json_decode($this->getContent($this->appliance_url), true);
            $appliance = $this->prepareDataAppliance($appliance);
            $cv->setAppliance($appliance);
        } catch (Exception $e) {echo  $e->getMessage();}

        return $this->getView()->render('index/index', [
            'parts' => new CvDataFactory()
        ]);
    }

    public function action404(){
        return $this->getView()->render('index/404');
    }


}