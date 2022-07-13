<?php

include("Config/consts.php");

// TODO: Add some methods
class Database {

    static function create($obj) {
        $connection = Database::connect();     
        $sql = "CREATE TABLE $obj->modelName (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
        )";
        $connection->query($sql);
        for($i = 0; $i < count($obj->fields); $i++) {
            $field = $obj->fields[$i];
            $sql = "ALTER TABLE $obj->modelName
            ADD $field varchar(255);";
            $connection->query($sql);
        }   
    }

    static function insert($obj, $values) {
        $connection = Database::connect();
        $field = str_replace(" ",", ", implode(" ",$obj->fields));
        $value = str_replace(" ",", ", implode(" ",$values));
        $sql = "INSERT INTO $obj->modelName ($field)
            VALUES ($value)";
        $connection->query($sql);
    }

    // Before calling request, use this func to update state
    static function connect() {
        $host = getenv("DB_HOST");
        $name = getenv("DB_NAME");
        $login = getenv("DB_LOGIN");
        // Hash
        $password = getenv("DB_PASS");
        try {
            // There u put ur values from .env for example
            $connection = new PDO("mysql:host=$host;dbname=$name", $login, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}