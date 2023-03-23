<?php

namespace App\Controllers;
use App\Libraries\Verify;
use App\Models\LoginModel;
use CodeIgniter\Config\Services;
use App\Controllers\BaseController;

class MainController extends BaseController
{
    public $loginModel;
    public $validation;
    public function __construct(){
        $this->loginModel=new LoginModel();
        $this->validation= Services::validation();
    }
    //helper functions
    protected $helpers=(["form","session"]);
    public function index()
    {
        //@login page
        return view("loginView.php");
      
    }

    public function login(){
        if (!$this->validate($this->validation->getRuleGroup("loginRules"))) {
            $validationErrors = $this->validator->listErrors();
            $this->response->setStatusCode(422);
            return $this->response->setJSON(["message" => $validationErrors]);
        } else {
            //collecting login details from the post method
            $username=$this->request->getPost("username");
            $password=$this->request->getPost("password");
            $userInfo=$this->loginModel->where("UserName",$username)->find();
            //verifying if user exists in thd database
            if($userInfo!==[]){
                $hashedpwd=$userInfo[0]["UserPassword"];
                if(!Verify::verify($password,$hashedpwd)){
                    $this->response->setStatusCode(401);
                    $this->response->setJSON(["message"=>"Invalid Password"])->send();
                }else{
                    session()->set("loggedUser",$userInfo);
                    $this->response->setJSON(["status"=>"success"])->send();
                    // return redirect()->to(base_url("/dashboard"));

                }
            }else{
                $this->response->setStatusCode(401);
                $this->response->setJSON(["message"=>"An unauthorised user"])->send();
            }
            
        }
    }
}
