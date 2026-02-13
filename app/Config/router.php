<?php

namespace App\Config;

class Router {
    protected $routes = [];
    
    public function bringRoutes($definedRoutes) {
        $this->routes = $definedRoutes;
    }

    public function dispatch() {
        $uri = $_SERVER["REQUEST_URI"];
        $method = $_SERVER["REQUEST_METHOD"];

        foreach($this->routes as $route) {
            if($route["method"] !== $method){
                continue;
            }

            if(preg_match($route["path"], $uri, $matches)) {
                array_shift($matches);
            
                $controller = explode("@", $route["handler"])[0];
                $controllerMethod = explode("@", $route["handler"])[1];

                $controller = "\App\Controllers\\" . $controller;
                $controller = new $controller();

                $controller->$controllerMethod(...$matches);
                return;
            }
        }

        $controller = new \App\Controllers\PagesController();
        $controller->render404Page();
    }
    
}