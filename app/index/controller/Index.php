<?php


namespace app\index\controller;
use think\Controller;
class index extends Controller
{
    public function index(){
        return $this->fetch("./view/index.html");
    }
}