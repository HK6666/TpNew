<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;

class About extends Controller
{
    public function about(){

        if (Session::has('username')) {

            return $this->fetch("./view/admin/about_us.html");
        }else{

            return $this->fetch("./view/admin/login.html");
        }
        return $this->fetch("./view/admin/login.html");

    }
}