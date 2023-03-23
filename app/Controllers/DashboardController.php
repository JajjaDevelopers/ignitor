<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        //
        $data["user"]=session()->get("loggedUser");
        return view("layout/main.php",$data);
    }
    public function logOut(){
        session()->remove("loggedUser");
        session()->destroy();
        return redirect()->to(base_url("/"))->with("message","You have been Logged Out");
    }
}
