<?php


namespace app\index\controller;
use think\Controller;
class GuestBook extends Controller
{
    public function guestBook(){
        return $this->fetch("./view/guestbook.html");
    }
}