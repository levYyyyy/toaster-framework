<?php

include('Core/Wrapper/Model.php');

class SomeModel extends Model{

    public $modelName = "toast";

    public $fields = [
        "toaster",
        "framework"
    ];

    static function index() {
        $obj = new SomeModel();
        $obj->createModel();
    }
}