<?php
require __DIR__ . '/vendor/autoload.php';

use App\Config\Router;

$router = new Router();

$definedRoutes = require __DIR__ . "/" . "app/Config/routes.php";

$router->bringRoutes($definedRoutes);

$router->dispatch();
