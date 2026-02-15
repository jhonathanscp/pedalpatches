<?php
namespace App\Controllers;
use App\Models\Pedal;

class PedalController {

    public function __construct(){
        
    }

    public function showPedal($id){
        $model = new Pedal;
        $data = $model->searchPedal($id);
        
        var_dump($data);
    }
}