<?php
namespace app\admin\controller;
use think\Controller;
class About extends Controller
{
    public function about(){
        return $this->fetch("./view/admin/about_us.html");
    }
}