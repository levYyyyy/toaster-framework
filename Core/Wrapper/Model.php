<?php

namespace Core\Wrapper;

use Core\Utils\Database;

class Model {   
    public function createModel(array $kwargs = []) {
        Database::create($this->$kwargs);
    }

    public function findModel(array $kwargs = []) {
        Database::read($this->$kwargs);
    }
    
    public function updateModel(array $kwargs = []) {
        Database::update($this->$kwargs);
    }

    public function deleteModel(array $kwargs = []) {
        Database::delete($this->$kwargs);
    }
}