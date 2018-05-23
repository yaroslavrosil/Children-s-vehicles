<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 23.05.2018
 * Time: 19:19
 */

namespace application\controllers;
use application\Controller;

class LeadsController extends Controller
{
    public function actionIndex(){
        $data = $this->getLeads();
        require_once ('/application/views/leads.php');
    }

    public function actionItem(){
        $data = $this->getLeads();
        require_once ('/application/views/item/lead.php');
    }
}