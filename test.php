<?php
    
$routes = [
    ['url' => 'home', 'method' => 'GET', 'action' => require_once "home.php"]
];

function Redirect($url){
    foreach ($routes as $route) {
        if ($route["url"] == $url) {
            $route["action"]();
            return;
        }
    }

    require_once "./app/Views/404.php";
}