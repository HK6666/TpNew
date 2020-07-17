<?php
namespace app\admin\controller;
use think\Controller;
use think\Loader;
use think\Request;
use app\admin\model\ContactModel;
use think\Session;

class Contact extends Controller
{
    public function contact(){
        if (Session::has('username')) {
            $value = session('username');
            $timeValue = date('Y-M-D');
            $this->assign("username",$value);
            $this->assign("timeValue",$timeValue);
            return $this->fetch("./view/admin/contact_us.html");
        }else{

            return $this->fetch("./view/admin/login.html");
        }


    }
    public function saveData(){
        $value = session('username');
        $request = Request::instance();
        $method = $request->method();//获取上传方式
        $request->param();//获取所有参数，最全
        $gb = Loader::model("ContactModel");
        $post = $request->post();
        dump($post);
        $gb -> saveData($post,$value);
        return $this->fetch("./view/admin/contact_us.html");
    }
}