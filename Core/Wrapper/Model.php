<?php

require_once('Core/Utils/Database.php');

class Model { 
    public function createModel() {
        $ctx = $this;
        Database::create($ctx);
    }

    public function insertInto(array $kwargs = []) {
        $ctx = $this;
        Database::insert($ctx, $kwargs);
    }
}