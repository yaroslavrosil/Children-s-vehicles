<?php

namespace application\models\parts;

use common\Database;
use PDO;

/**
 * Class Education
 * @package application\models\parts
 */
class Product extends Database
{

    const TABLE_NAME = 'products';

    /**
     * @return array
     */
    public function get($product_id)
    {
        $query = $this->getConnection()->prepare('SELECT * FROM products WHERE product_id = :product_id');
        $query->bindParam(':product_id',$product_id);
        if ($query->execute()) {
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } else {throw new Exception('No connection with database');}
    }

    public function set(array $data){

        $this->clearTable(self::TABLE_NAME);
        $query = $this
            ->getConnection()
            ->prepare('INSERT INTO products (product_id, title, description, photo, price, weight) 
              VALUES (:product_id, :title, :description, :photo, :price,:weight)');

        for ($i = 0; $i < count($data)-1; $i++) {
            $query->bindParam(':product_id', $data[$i]['product_id'], PDO::PARAM_STR);
            $query->bindParam(':title', $data[$i]['title'], PDO::PARAM_STR);
            $query->bindParam(':description', $data[$i]['description'], PDO::PARAM_STR);
            $query->bindParam(':photo', $data[$i]['photo'], PDO::PARAM_STR);
            $query->bindParam(':price', $data[$i]['price'], PDO::PARAM_STR);
            $query->bindParam(':weight', $data[$i]['weight'], PDO::PARAM_STR);
            $query->execute();
        }

    }
}
