<?php

namespace site\base;
use site\Db;
use Valitron\Validator;

abstract class Model{

    public $atributes = [];
    public $errors = [];
    public $rules = [];

    public $database;

    public function __construct() {
        $this->database = Db::instance();
    }

    public function findAll() {
        return $this->database->query("SELECT * FROM $this->table");
    }

    public function find($sql) {
        return $this->database->query($sql);
    } 

    public function add($sql) {
        return $this->database->execute($sql);
    }

    public function save($login, $password, $email) {
        return $this->database->execute("INSERT INTO $this->table (login, password, email) VALUES ('$login', '$password', '$email')");
    }

    public function getErrors() {
        $errors = '<ul>';
        foreach ($this->errors as $error) {
            foreach ($error as $item) {
                $errors .= "<li>$item</li>";
            }
        }
        $errors .= '</ul>';
        $_SESSION['error'] = $errors;
    }

    public function validate($data) {
        Validator::langDir(WWW . '/validator/lang');
        Validator::lang('ru');
        $v = new Validator($data);
        $v->rules($this->rules);
        if($v->validate()) {
            return true;
        }
        $this->errors = $v->errors();
        return false;
    }

}

?>