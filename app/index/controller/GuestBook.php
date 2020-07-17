<?php

namespace app\index\controller;
use think\console\Input;
use think\Loader;
use think\Controller;
use app\index\model\GuestBookModule;
use think\Request;

class GuestBook extends Controller
{
    public function guestBook(){

        return $this->fetch("./view/guestbook.html");
    }
    public function saveData(){
        $request = Request::instance();
        $method = $request->method();//获取上传方式
        $request->param();//获取所有参数，最全
        $gb = Loader::model("GuestBookModule");
        $post = $request->post();
        $gb -> saveData($post);
        return $this->fetch("./view/guestbook.html");

    }
}