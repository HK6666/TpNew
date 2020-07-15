<?php
namespace app\admin\controller;
use think\Controller;
class Contact extends Controller
{
    public function contact(){
        return $this->fetch("./view/admin/contact_us.html");
    }
}