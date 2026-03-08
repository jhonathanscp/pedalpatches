<?php
declare(strict_types = 1);

namespace App\Controllers;
use App\Models\Pedal;
use App\Controllers\PagesController;

class PedalController extends PagesController
{

    private $pedalModel;

    public function __construct()
    {
        parent::__construct();

        $this->pedalModel = new Pedal();
    }

    public function showPedal(string|int $slug): void
    {
        $data = $this->pedalModel->searchPedal($slug);
        
        if ($data) {
            $this->view("pedals", "pedalPage", $data);
        }
        else {
            $this->render404Page();
        }
    }

    public function registerNewPedal(string|int $id, string $brand, string $model, string $releaseDate): void
    {
        $this->pedalModel->registerNewPedal($id, $brand, $model, $releaseDate);

        $this->view("pedals", "pedalPage", $this->pedalModel->searchPedal($id));

    }
}