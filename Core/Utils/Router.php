<?php

class Router {
    static function get($url, $params = []) {
        $obj = new $params[0];
        if(Router::checkForValidUrl($url)) {
            call_user_func(array($obj, $params[1]));
        }
    }


    static function checkForValidUrl($url) {
        if ($_SERVER['REQUEST_URI'] == $url) {
            return true;
        } else {
            return false;
        }
    }
}