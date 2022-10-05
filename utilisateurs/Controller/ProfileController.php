<?php

namespace Users\Controller;

class ProfileController
{

    public function index()
    {
        echo ProfileController::class;
        include '../View/profile.php';
    }
}