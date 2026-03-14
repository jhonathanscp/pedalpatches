<?php

declare(strict_types=1);

namespace App\Controllers;

class AuthController extends PagesController
{
    public function renderAuthPage()
    {
        $this->view("pages", "authPage");
    }
}
