<?php
namespace app\index\controller;
use think\Controller;
class PInfo extends Controller
{
    public function pInfo(){
        return $this->fetch("./view/product_info.html");
    }
}