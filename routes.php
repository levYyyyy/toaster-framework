<?php

use SomeController;
use Core\Wrapper\Controller;

Controller::get('/name', [SomeController::class, 'smth']);