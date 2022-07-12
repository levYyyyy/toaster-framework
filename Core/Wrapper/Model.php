<?php

require_once('Core/Utils/Database.php');

class Model { 
    static function createModel($tableName, array $kwargs = []) {
        Database::create($tableName, $kwargs);
    }

    static function insertInto($tableName, array $kwargs = []) {
        Database::insert($tableName, $kwargs);
    }

    static function deleteFrom($tableName, $rowNumber) {
        Database::delete($tableName, $kwargs);
    }

    static function readFrom($tableName, $rowNumber) {
        Database::read($tableName, $rowNumber);
    }

}