<?php
namespace app\admin\controller;
use think\Controller;
class Sys extends Controller
{
    public function sys(){
        return $this->fetch("./view/admin/sys_info.html");
    }
}