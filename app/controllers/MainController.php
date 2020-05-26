<?php

namespace app\controllers;
use site\base\Controller;
use app\models\Main;

class MainController extends Controller {

    public function indexAction() {
        $books = new Main();
        $allBooks = $books->findAll(); 
        $this->set(compact("allBooks"));
        $this->setMeta('Книги мира', 'Рассказываем о прелестях русской литературы', 'Книги');
    }

}

?>