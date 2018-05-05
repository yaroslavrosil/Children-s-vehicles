<?php

namespace application\models;

use common\Model;
use application\models\parts\Product;
use application\models\parts\Collection;
use application\models\parts\Collections;
use application\models\parts\Products;


/**
 * Class CvFactory
 */
class CvDataFactory
{
    private $data = [];

    public function getProduct($product_id)
    {
        if (!isset($this->data['product'])) {
            $data = Model::populateModel('\application\models\cv\Product', (new Product())->get($product_id));
            $this->data['product'] = $data;
        }
        return $this->data['product'];
    }

    public function getCollection($collection_id)
    {
        if (!isset($this->data['collection'])) {
            $data = Model::populateModels('\application\models\cv\Product', (new Collection())->get($collection_id));
            $this->data['collection'] = $data;
        }
        return $this->data['collection'];
    }

    public function getCollections()
    {
        if (!isset($this->data['collections'])) {
            $data = Model::populateModels('\application\models\cv\Collections', (new Collections())->get());
            $this->data['collection'] = $data;
        }

        return $this->data['collection'];
    }

    public function getProducts()
    {
        if (!isset($this->data['products'])) {
            $data = Model::populateModels('\application\models\cv\Product', (new Products())->get());
            $this->data['products'] = $data;
        }

        return $this->data['products'];
    }


    public function setProducts(array $content){
        $products = new Product();
        $products->set($content);
    }

    public function setCollections($content){
        $collections = new Collections();
        $collections->set($content);
    }

    public function setAppliance($content){
        $collections = new Collection();
        $collections->set($content);
    }
}
