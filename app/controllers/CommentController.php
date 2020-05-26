<?php

namespace app\controllers;
use site\base\Controller;
use app\models\User;

class CommentController extends Controller {

    public function showAction() {
        if(!empty($_GET)) { 
            $id = $_GET['book_id'];
            $_SESSION['book'] = $id;
            $user = new User();
            $str = $user->find("SELECT * FROM books WHERE id = '$id'"); 

            if($this->isAjax()) {
                $this->loadView('comment_modal', $str[0]);
            }
        }
        die();
    }

    public function addAction() {
        if(!empty($_POST)) {
            $text = $_POST['text'];
            $user_login = $_SESSION['user']['login'];
            $book_id = $_SESSION['book'];
            $user = new User();
            $str = $user->add("INSERT INTO comments (user_login, book_id, comment) VALUES ('$user_login', '$book_id', '$text')");
            if($str) {
                $_SESSION['ready'] = "Ваш комментарий успешно добавлен";
            } else {
                $_SESSION['not_ready'] = "Произошла ошибка";
            }
        }
        redirect();
    }

    public function checkAction() {
        if(!empty($_GET)){
            $id = $_GET['book_id'];

            $user = new User();
            $allReviews = $user->find("SELECT * FROM comments WHERE book_id = '$id'");

            if($this->isAjax()) {
                $this->loadView('all_comments', $allReviews);
            }
        }
    }

}

?>