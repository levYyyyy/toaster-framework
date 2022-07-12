<?php

class Database {

    static function create($tableName, $fields) {
        $connection = Database::connect();

    }

    static function insert($tableName, $fields) {
        $connection = Database::connect();

    }

    static function read($tableName, $number) {
        $connection = Database::connect();

    }

    static function delete($tableName, $number) {
        $connection = Database::connect();

    }


    // Before calling request, use this func to update state
    static function connect() {
        try {
            // There u put ur values from .env for example
            $connection = new PDO("mysql:host=localhost;dbname=toaster", 'root', '');
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}