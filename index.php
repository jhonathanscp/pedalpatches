<?php
require __DIR__ . '/vendor/autoload.php';

use App\Config\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new Router();

$definedRoutes = require __DIR__ . "/" . "app/Config/routes.php";

$router->bringRoutes($definedRoutes);

$router->dispatch();
