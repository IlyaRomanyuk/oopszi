<?php

function debug($arr) {
    echo '<pre>';
        print_r($arr);
    echo '</pre>';
}

function redirect($http = false) {
    if($http) {
        $redirect = $http;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    die();
}

/*Разобраться !!!!!*/ 

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

?>