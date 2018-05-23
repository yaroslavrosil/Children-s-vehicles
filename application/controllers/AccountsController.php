<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 23.05.2018
 * Time: 18:44
 */

namespace application\controllers;

use application\Controller;

class AccountsController extends Controller
{
    public function actionIndex(){
        $data = $this->getAccounts();
        require_once ('/application/views/accounts.php');
    }

    public function actionItem(){
        $data = $this->getAccounts();
        require_once ('/application/views/item/account.php');
    }
}