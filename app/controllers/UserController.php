<?php

namespace app\controllers;
use site\base\Controller;
use app\models\User;

class UserController extends Controller {

    public function signupAction() {
        if(!empty($_POST)){
            $login = $_POST['login'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $user = new User();

            if(!$user->validate($_POST) || !$user->checkUnique($_POST)){
                $user->getErrors();
            }  else {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    if($user->save($login, $password, $email)) {
                        $_SESSION['success'] = 'Вы успешно зарегистрированы';

                    } else {
                        $_SESSION['error'] = "Ошибка";
                    }
                }
                redirect(); 
            }
            $this->setMeta('Регистрация');
    }

    public function loginAction() {
        if(!empty($_POST)) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $user = new User();
            $person = $user->find("SELECT * FROM $user->table WHERE login='$login'");
            if(password_verify($password, $person[0]['password'])) {
                foreach($person[0] as $key=>$value) {
                    if($key != 'password') {
                        $_SESSION['user'][$key] = $value;
                    }
                }
            }            
        }
        $this->setMeta('Авторизация');
    }

    public function logoutAction() {
        if($_SESSION['user']) {
            unset($_SESSION['user']);
        }
        redirect();
    }

} 

?>