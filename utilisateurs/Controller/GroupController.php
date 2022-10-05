<?php

namespace Users\Controller;

/**
 * Manage group UI actions
 * @author Bastian
 * @version Bof
 * @license MIT
 */

Class GroupController
{

    /**
     * Route /?page=groups
     * @return void
     */
    public function index(): void
    {
        require '../View/groups.php';
    }
}