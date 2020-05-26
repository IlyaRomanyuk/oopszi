<?php

namespace app\models;
use site\base\Model;

class User extends Model {
    public $table = 'users';

    public $rules = [
        'required' => [
            ['login'],
            ['password'],
            ['email']
        ],
        'email' => [
            ['email']
        ],
        'lengthMin' => [
            ['password', 4]
        ]
    ];

    public function checkUnique($data) {
        $login = $data['login'];
        $email = $data['email'];
        $sql = "SELECT * FROM $this->table WHERE login = '$login' OR email = '$email'";
        $user = $this->find($sql);
        if($user){
            if($user[0]['login'] == $data['login']) {
                $this->errors['unique'][] = 'This login is not empty';
            }

            if($user[0]['email'] == $data['email']) {
                $this->errors['unique'][] = 'This email is not empty';
            }
            return false;
        }
        return true;
    }

}

?>