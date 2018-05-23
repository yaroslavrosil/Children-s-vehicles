<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 23.05.2018
 * Time: 19:23
 */

namespace application\controllers;
use application\Controller;

class OpportunitiesController extends Controller
{
    public function actionIndex(){
        $data = $this->getOpportunities();
        require_once ('/application/views/opportunities.php');
    }

    public function actionItem(){
        $data = $this->getOpportunities();
        require_once ('/application/views/item/opportunity.php');
    }
}