<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 04.05.18
 * Time: 10:13
 */

namespace application\models\parts;
use common\Database;
use PDO;

class Products extends Database
{
    public function get()
    {
        $query = $this->getConnection()->prepare('SELECT * FROM products');
        if ($query->execute()) {
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } else {throw new Exception('No connection with database');}
    }
}