<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 23.05.2018
 * Time: 19:26
 */

namespace application\controllers;
use application\Controller;

class TasksController extends Controller
{
    public function actionIndex(){
        $data = $this->getTasks();
        require_once ('/application/views/tasks.php');
    }

    public function actionItem(){
        $data = $this->getTasks();
        require_once ('/application/views/item/task.php');
    }
}