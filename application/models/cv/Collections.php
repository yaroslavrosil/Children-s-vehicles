<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 29.04.18
 * Time: 0:44
 */

namespace application\models\cv;
use application\models\AbstractBaseModel;


class Collections extends AbstractBaseModel
{
    public function getCollectionId()
    {
        return $this->getValue('collection_id');
    }

    public function getTitle()
    {
        return $this->getValue('title');
    }

    public function getImage()
    {
        return $this->getValue('image');
    }
}