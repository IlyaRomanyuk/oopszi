<?php

namespace app\controllers;
use site\base\Controller;
use app\models\Search;

class AboutController extends Controller {

    public function indexAction() {
        if(!empty($_GET)) {
            $title = $_GET['title'];
            $search = new Search();
            $result = $search->find("SELECT * FROM $search->table WHERE name = '$title' ");
            $this->set(compact('result'));
        }
    }

}

?>