<?php
declare(strict_types=1);

namespace App\Controllers;

class PagesController{

    private $viewsPath;

    public function __construct() {
        $this->viewsPath = dirname(__DIR__) . "/Views/";
    }

    public function renderHomePage(): void {
        require_once $this->viewsPath . "home.php";
        return;
    }
    
    public function render404Page(): void {
        http_response_code(404);
        require_once $this->viewsPath . "404.php";
        return;
    }
    
    public function view($viewFolder, $viewName, $data) {
        extract($data);
        $file = $this->viewsPath . "{$viewFolder}/{$viewName}.php";

        if(file_exists($file)){
            require $file;
        } else{
            die("View não encontrada: " . $file);
        }
    }
}
