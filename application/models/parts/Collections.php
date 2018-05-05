<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 28.04.18
 * Time: 21:15
 */

namespace application\models\parts;

use common\Database;
use PDO;


class Collections extends Database
{
    public function get()
    {
        $query = $this->getConnection()->prepare('SELECT * FROM collections');
        if ($query->execute()) {
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } else {throw new Exception('No connection with database');}
    }

    public function set(array $data)
    {
        $this->clearTable('collections');
        $query = $this
            ->getConnection()
            ->prepare('INSERT INTO collections (collection_id, title, image) VALUES (:collection_id, :title, :image)');

        for ($i = 0; $i < count($data)-1; $i++){
            $query->bindParam(':collection_id', $data[$i]['collection_id'], PDO::PARAM_STR);
            $query->bindParam(':title', $data[$i]['title'], PDO::PARAM_STR);
            $query->bindParam(':image', $data[$i]['image'], PDO::PARAM_STR);
            $query->execute();
        }

    }
}