<?php

namespace application;

use common\Config;
use common\Template;

/**
 * Class Controller
 * @package application
 */
class Controller extends \common\Controller
{
    /**
     * @return Template|null
     */
    protected $url = 'http://crm.internatzba.com.ua/service/v4_1/rest.php';

    public function getView()
    {
        $this->view = new Template();
        $this->view->setTemplatesDirectory(Config::getInstance()->get('templatesPath'));
        return $this->view->setLayout('layouts/main');
    }


    public function restRequest($method, $arguments){
        $curl = curl_init($this->url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $post = array(
            "method" => $method,
            "input_type" => "JSON",
            "response_type" => "JSON",
            "rest_data" => json_encode($arguments),
        );

        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

        $result = curl_exec($curl);
        curl_close($curl);
        return json_decode($result,1);
    }

    public function getAuth(){
        $userAuth = array(
            'user_name' => 'admin',
            'password' => md5('Test!123'),
        );
        $appName = 'My SuiteCRM REST Client';
        $nameValueList = array();

        $args = array(
            'user_auth' => $userAuth,
            'application_name' => $appName,
            'name_value_list' => $nameValueList);

        $result = $this->restRequest('login', $args);
        return $result['id'];
    }


    public function getAccounts()
    {
        $sessId = $this->getAuth();
        $entryArgs = array(
            //Session id - retrieved from login call
            'session' => $sessId,
            //Module to get_entry_list for
            'module_name' => 'Accounts',
            //Filter query - Added to the SQL where clause,
            'query' => "",
            //Order by - unused
            'order_by' => '',
            //Start with the first record
            'offset' => 0,
            //Return the id and name fields
            'select_fields' => array(),
            //Show 30 max results
            'max_results' => 30,
            //Do not show deleted
            'deleted' => 0,
        );
        $result = $this->restRequest('get_entry_list', $entryArgs);
        return $result;
    }

    public function getContacts()
    {
        $sessId = $this->getAuth();
        $entryArgs = array(
            //Session id - retrieved from login call
            'session' => $sessId,
            //Module to get_entry_list for
            'module_name' => 'Contacts',
            //Filter query - Added to the SQL where clause,
            'query' => "",
            //Order by - unused
            'order_by' => '',
            //Start with the first record
            'offset' => 0,
            //Return the id and name fields
            'select_fields' => array(),
            //Show 30 max results
            'max_results' => 30,
            //Do not show deleted
            'deleted' => 0,
        );
        $result = $this->restRequest('get_entry_list', $entryArgs);
        return $result;
    }
    public function getLeads()
    {
        $sessId = $this->getAuth();
        $entryArgs = array(
            //Session id - retrieved from login call
            'session' => $sessId,
            //Module to get_entry_list for
            'module_name' => 'Leads',
            //Filter query - Added to the SQL where clause,
            'query' => "",
            //Order by - unused
            'order_by' => '',
            //Start with the first record
            'offset' => 0,
            //Return the id and name fields
            'select_fields' => array(),
            //Show 30 max results
            'max_results' => 30,
            //Do not show deleted
            'deleted' => 0,
        );
        $result = $this->restRequest('get_entry_list', $entryArgs);
        return $result;
    }

    public function getOpportunities()
    {
        $sessId = $this->getAuth();
        $entryArgs = array(
            //Session id - retrieved from login call
            'session' => $sessId,
            //Module to get_entry_list for
            'module_name' => 'Opportunities',
            //Filter query - Added to the SQL where clause,
            'query' => "",
            //Order by - unused
            'order_by' => '',
            //Start with the first record
            'offset' => 0,
            //Return the id and name fields
            'select_fields' => array(),
            //Show 30 max results
            'max_results' => 30,
            //Do not show deleted
            'deleted' => 0,
        );
        $result = $this->restRequest('get_entry_list', $entryArgs);
        return $result;
    }

    public function getTasks()
    {
        $sessId = $this->getAuth();
        $entryArgs = array(
            //Session id - retrieved from login call
            'session' => $sessId,
            //Module to get_entry_list for
            'module_name' => 'Tasks',
            //Filter query - Added to the SQL where clause,
            'query' => "",
            //Order by - unused
            'order_by' => '',
            //Start with the first record
            'offset' => 0,
            //Return the id and name fields
            'select_fields' => array(),
            //Show 30 max results
            'max_results' => 30,
            //Do not show deleted
            'deleted' => 0,
        );
        $result = $this->restRequest('get_entry_list', $entryArgs);
        return $result;
    }

    public function getModules()
    {
        $sessId = $this->getAuth();
        $entryArgs = array(
            //Session id - retrieved from login call
            'session' => $sessId,
            //Filter
            'filter' => 'default',
        );
        $result = $this->restRequest('get_available_modules', $entryArgs);
        return $result;
    }
}