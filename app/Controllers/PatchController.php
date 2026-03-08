<?php

declare(strict_types=1);

namespace App\Controllers;

class PatchController extends PagesController {

  public function renderUploadPatchPage() {
    $this->view("pages", "patchPedal");
    return;
  }

  public function uploadNewPach() {
    
  }
}
