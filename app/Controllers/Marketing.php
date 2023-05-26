<?php

namespace App\Controllers;
use App\Libraries\Verify;
use App\Models\LoginModel;
use CodeIgniter\Config\Services;
use CodeIgniter\I18n\Time;
use App\Controllers\BaseController;

class Marketing extends BaseController
{
    
    public function salesReport(){
        $today = new Time('now');
        $data = [
            'today'     =>$today->toDateString(),
            'pageTitle' =>"Sales Report"
        ];
        echo view('templates/header', $data);
        echo view('marketing/salesReport', $data);
        echo view('templates/footer');
    }
}