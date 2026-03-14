<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/app/helpers.php';

use App\Config\Router;
use Dotenv\Dotenv;

session_start();

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new Router();

$definedRoutes = require __DIR__ . "/App/Config/routes.php";

$router->bringRoutes($definedRoutes);

$router->dispatch();
