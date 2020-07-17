<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Session;
use think\Verify;
use app\admin\server\LoginServer;
class Login extends Controller
{
    public function index(){
        session(null);
        return $this->fetch("./view/admin/login.html");
    }
    public function login(){
            $error = "错误信息提示";
            $request = Request::instance();
            $method = $request->method();//获取上传方式
            $request->param();//获取所有参数，最全
            $post = $request->post();
            dump($post);
            $check = new LoginServer();
            $if    = $check -> check($post['imgcode']);
            $ifU   = $check->checkU($post);
            dump($ifU);
            dump("这是if".$if);
            if ($if === true && $ifU == '账号密码正确'){
                Session::set('username',$post['username']);
                Session::set('password',$post['password']);
                $this->redirect("admin/Index/index");
            }else{
                dump($error);
              $this->redirect("admin/Login/index");
            }


    }

}