<?php
namespace app\admin\controller;
use think\Controller;
class Top extends Controller
{
    public function top(){
        return $this->fetch("./view/admin/top.html");
    }
}