<?php
namespace app\index\controller;
use think\Controller;
class Info extends Controller
{
    public function info(){
        return $this->fetch("./view/info.html");
    }
}