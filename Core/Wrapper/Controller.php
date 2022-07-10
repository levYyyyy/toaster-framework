<?php

namespace Core\Wrapper;

class Controller {
    public function get($url, array $method = []) {
        callMethod($method); 
    }

    public function post($url, array $method = []) {
        callMethod($method);
    }

    protected function callMethod(array $callableMethod = []) {
        $obj = new $callableMethod[0];
        call_user_func(array($obj, $callableMethod[1]));
    }
}