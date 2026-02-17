<?php
declare(strict_types=1);

namespace App\Config;

class Router {
    protected array $routes = [];
    
    public function bringRoutes($definedRoutes): void {
        $this->routes = $definedRoutes;
    }

    public function dispatch(): void {
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