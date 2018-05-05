<?php

namespace application;

use common\Config;
use common\Template;

/**
 * Class Controller
 * @package application
 */
class Controller extends \common\Controller
{
    /**
     * @return Template|null
     */
    public function getView()
    {
        $this->view = new Template();
        $this->view->setTemplatesDirectory(Config::getInstance()->get('templatesPath'));
        return $this->view->setLayout('layouts/main');
    }


    public function getContent($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        if (isset($data)) {
            return $data;
        } else {throw new Exception('No connection with Shopify API');}
    }


    /**
     * @param $array
     * @return mixed
     */
    public function prepareDataProducts($array) {
        $data = array();
        $i = 0;
        while (isset($array['product_listings'][$i]['product_id'])) {
            $data[$i]['product_id'] = $array['product_listings'][$i]['product_id'];
            $data[$i]['title'] = $array['product_listings'][$i]['title'];
            $data[$i]['description'] = $array['product_listings'][$i]['body_html'];
            $data[$i]['photo'] = $array['product_listings'][$i]['images'][0]['src'];
            $data[$i]['price'] = $array['product_listings'][$i]['variants'][0]['price'];
            $data[$i]['weight'] = $array['product_listings'][$i]['variants'][0]['weight'];
            $i++;
        }
        return $data;
    }


    public function prepareDataCollections($array) {
        $data = array();
        $i = 0;
        while (isset($array['collection_listings'][$i]['collection_id'])){
            $data[$i]['collection_id'] = $array['collection_listings'][$i]['collection_id'];
            $data[$i]['title'] = $array['collection_listings'][$i]['title'];
            $data[$i]['image'] = $array['collection_listings'][$i]['default_product_image']['src'];
            $i++;
        }
        return $data;
    }


    public function prepareDataAppliance($array) {
        $data = array();
        $i = 0;
        while (isset($array['collects'][$i]['product_id'])){
            $data[$i]['collection_id'] = $array['collects'][$i]['collection_id'];
            $data[$i]['product_id'] = $array['collects'][$i]['product_id'];
            $i++;
        }
        return $data;
    }
}