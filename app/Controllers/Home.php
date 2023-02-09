<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header');
        // echo view('form');
        echo view('contenue');
        echo view('footer');
    }
}
