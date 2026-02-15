<?php
namespace App\Controllers;

class PagesController{

    public function renderHomePage() {
        require_once dirname(__DIR__) . "/Views/home.php";
        return;
    }
    
    public function render404Page() {
        require_once dirname(__DIR__) . "/Views/404.php";
        return;
    }
    
    public function view($viewName, $data) {
        extract($data);
        require "App/Views/{$viewName}.php";
    }
}
