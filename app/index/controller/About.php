<?php

namespace app\index\controller;
use think\Controller;
class About extends Controller
{
    public function about(){
        return $this->fetch("./view/about_us.html");
    }
}