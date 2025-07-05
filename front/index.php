<?php
require_once "./Core/Router.php";
require_once "./Core/Controller.php";

// Importing controllers -- Can be done automaticaly
require_once "./Controllers/HomeController.php";
require_once "./Controllers/ErrorController.php";

$router = new Router();

// Basics Routes
$router->add('/index', new HomeController(), 'index');
$router->add('/', new HomeController(), 'index');

// Error Routes
$router->add('error', new ErrorController(), 'index');

$router->dispatch($_SERVER['REQUEST_URI']);
?>
