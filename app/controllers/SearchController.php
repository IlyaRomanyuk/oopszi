<?php

namespace app\controllers;
use site\base\Controller;
use app\models\Search;

class SearchController extends Controller {

    public function indexAction() {
        if($this->isAjax()) {
            if(!empty($_GET)) {
                $query = trim($_GET['search']);
                if($query) {
                    $search = new Search();
                    $result = $search->find("SELECT name, images  FROM $search->table WHERE name LIKE '%{$query}%' ");
                    //$this->set(compact('result'));
                    $this->loadView('index', $result);
                }
            }
        } 
        die;      
    }

}


?>