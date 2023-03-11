<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    //helper functions
    protected $helpers=("form");
    public function index()
    {
        //@login page
        return view("loginView.php");
      
    }
}
