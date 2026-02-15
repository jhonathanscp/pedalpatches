<?php
namespace App\Controllers;
use App\Models\Pedal;
use App\Controllers\PagesController;

class PedalController extends PagesController {

    public function __construct(){
        
    }

    public function showPedal($id){
        $model = new Pedal;
        $data = $model->searchPedal($id);

        $this->view("pedalPage", $data);
    }
}