<?php

// TODO: fix bug with namespaces
include("Core/Utils/Router.php");
include("Core/Utils/Database.php");
include("App/Controller/SomeController.php");
include("App/Model/SomeModel.php");

// We dont want to use static methods, so we r giving array for call_user_func
Router::set("/", [SomeController::class, 'index']);

$host = getenv('DB_HOST');
echo($host);