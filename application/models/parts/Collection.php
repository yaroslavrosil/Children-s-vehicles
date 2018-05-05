<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 28.04.18
 * Time: 21:02
 */

namespace application\models\parts;
use common\Database;
use PDO;


class Collection extends Database
{
    public function getId($collectionId)
    {
        $query = $this->getConnection()->prepare('SELECT product_id FROM appliance WHERE collection_id = :collection_id');
        $query->bindParam(':collection_id',$collectionId);
        if ($query->execute()) {
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } else {throw new Exception('No connection with database');}
    }


    public function get($collectionId)
    {
        $productsId = $this->getId($collectionId);
        $query = $this->getConnection()->prepare('SELECT * FROM products WHERE product_id = :productsId');
        $data = [];
        foreach ($productsId as $row){
            $query->bindParam(':productsId', $row['product_id']);
            $query->execute();
            $data = array_merge($data, $query->fetchAll(PDO::FETCH_ASSOC));
        }
        if (isset($data)) {
            return $data;
        } else {throw new Exception('No connection with database');}
    }


    public function set(array $data)
    {
        $this->clearTable('appliance');
        $query = $this
            ->getConnection()
            ->prepare('INSERT INTO appliance (collection_id, product_id) VALUES (:collection_id, :product_id)');

        for ($i = 0; $i < count($data)-1; $i++){
            $query->bindParam(':collection_id', $data[$i]['collection_id'], PDO::PARAM_STR);
            $query->bindParam(':product_id', $data[$i]['product_id'], PDO::PARAM_STR);
            $query->execute();
        }

    }
}