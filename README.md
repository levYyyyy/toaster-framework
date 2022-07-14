<h1>Toaster Framework</h1>

## About

Simple MVC framework with ORM using:

* PHP
* MYSql Database

## Getting Started

* Run composer create-project toaster/toaster name-of-project
* Config database connection in Config/consts.php

## Documentation

1) Register router:

In index.php file u can use method 'set' to register route.

First parameter should be route in format '/sometoast', in the second one u put array of Controller::class and method of this controller in string format

Router::set("/", [SomeController::class, 'index']);

(Dont forget to include Classe")

2) Create controller 

In App/Controller create "Name"Controller and realize methods

U can return View by using in method include('Resources/someview.php');

3) Create model

In App/Model create "Name"Model and realize fields $modelName, $fields.

Extend Model class

!WARNING CRUTCH!

To create model in db, u should create object of "Name"Model and call method createModel(). After that you should delete those lines. My framework does not have any migration system or CLI so yeah

After that in controller you can create object of this model, and use DB method insertInto(['value1', 'value2', ...])
