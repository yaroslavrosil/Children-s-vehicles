<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 22.03.18
 * Time: 19:50
 */

namespace application\controllers;
use application\Controller;

class IndexController extends Controller
{
    public function actionIndex(){
       require_once ('application/views/index.php');
    }
}