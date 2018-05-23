<?php
/**
 * Created by PhpStorm.
 * User: yaroslav
 * Date: 23.05.2018
 * Time: 19:02
 */

namespace application\controllers;
use application\Controller;

class ContactsController extends Controller
{
    public function actionIndex(){
        $data = $this->getContacts();
        require_once ('/application/views/contacts.php');
    }

    public function actionItem(){
        $data = $this->getContacts();
        require_once ('/application/views/item/contact.php');
    }
}