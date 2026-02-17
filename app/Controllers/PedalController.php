<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\Pedal;
use App\Controllers\PagesController;

class PedalController extends PagesController {

    private $pedalModel;

    public function __construct(){
        parent::__construct();

        $this->pedalModel = new Pedal();
    }

    public function showPedal(string|int $id): void{
        $data = $this->pedalModel->searchPedal($id);

        if(isset($data)) {
            $this->view("pedals", "pedalPage", $data);
        } else {

        }


    }
}