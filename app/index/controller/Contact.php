<?php

namespace app\index\controller;
use think\Controller;
class Contact extends Controller
{
    public function contact(){
        return $this->fetch("./view/contact_us.html");
    }
}