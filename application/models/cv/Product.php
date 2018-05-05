<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 28.04.18
 * Time: 20:29
 */

namespace application\models\cv;
use application\models\AbstractBaseModel;


class Product extends AbstractBaseModel
{
    /**
     * @return null|string
     */
    public function getProductId()
    {
        return $this->getValue('product_id');
    }

    public function getTitle()
    {
        return $this->getValue('title');
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->getValue('description');
    }

    /**
     * @return null|string
     */
    public function getPhoto()
    {
        return $this->getValue('photo');
    }

    /**
     * @return null|string
     */
    public function getPrice()
    {
        return $this->getValue('price');
    }

    /**
     * @return null|string
     */
    public function getWeight()
    {
        return $this->getValue('weight');
    }

}