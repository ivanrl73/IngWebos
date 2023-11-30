<?php

require 'vendor/autoload.php';
use MVC\Router;



$uri = $_SERVER['REQUEST_URI'];

$router = require 'src/routes.php';
$router = new Router();
$router->dispatch($uri);
    
    