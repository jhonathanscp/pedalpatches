<?php
namespace App\Controllers;
use App\Models\Pedal;
use App\Controllers\PagesController;

class PedalController extends PagesController {

    private $pedalModel;

    public function __construct(){
        parent::__construct();

        $this->pedalModel = new Pedal();
    }

    public function showPedal($id){
        
        $data = $this->pedalModel->searchPedal($id);

        $this->view("pedals", "pedalPage", $data);
    }
}